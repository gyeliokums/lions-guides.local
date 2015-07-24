<?php
namespace API\Lib {
	class PDOMySQL extends \PDO {
		public function __construct() {
			try {
				$sql = '\API\Config\\' . \API\Config\Parameters::$sql;
				parent::__construct(
					'mysql:host=' . $sql::$host . ';port=' . $sql::$port . ';dbname=' . $sql::$db,
					$sql::$user,
					$sql::$password);
				parent::query('set names utf8;');
/*				parent::__construct(
					'mysql:host=' . \Config\SQL::$host . ';port=' . \Config\SQL::$port . ';dbname=' . \Config\SQL::$db,
					\Config\SQL::$user,
					\Config\SQL::$password);*/
			} catch (\PDOException $e) {
				die('Error DB-connect for: mysql:host=' . $sql::$host . ';port=' . $sql::$port . ';dbname=' . $sql::$db . ';user=' . $sql::$user . ';password=' . $sql::$password);
				throw new \Exception($e->getMessage());
			}
		}

		public function query() {
			$args = func_get_args();
			$query = array_shift($args);
			if (isset($args[0]) && is_array($args[0]))
				$args = $args[0];
			$stmt = $this->prepare($query);
			$result = null;
			if (true === $stmt->execute($args))
				$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $result;
		}

		public function showQuery() {
			$params = func_get_args();
			$query = array_shift($params);
			if (isset($params[0]) && is_array($params[0]))
				$params = $params[0];
			$keys = array();
			$values = array();

			foreach ($params as $key => $value) {
				if (is_string($key))
					$keys[] = '/:' . $key . '/';
				else
					$keys[] = '/[?]/';
				if (is_numeric($value))
					$values[] = intval($value);
				else
					$values[] = '\'' . addslashes($value) . '\'';
			}

			$query = preg_replace($keys, $values, $query, 1, $count);

			return $query;
		}
	}
}
?>