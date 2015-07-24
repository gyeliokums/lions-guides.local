<?php
namespace API\Lib {
	class Auth {
		static public
			$ttl = 1800; // время жизни сессии в секундах

		static public function check() {
			$db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
			$_table = _makeTableName(\API\Config\Parameters::$tablePrefix, 'administrators');
			if (!session_id()) {
				$_SESSION['error']['message'] = 'Сессия не открыта!';
				return false;
			} elseif (isset($_REQUEST['logout'])) {
				$_SESSION['auth'] = null;
				session_destroy();
				return false;
			} elseif (!empty($_REQUEST['login']) && !empty($_REQUEST['password'])) { // проверка БД
				$sql = 'select * from `' . $_table . '` where `email`=? and `password`=? limit 1;';
				$l = $_REQUEST['login'];
				$p = $_REQUEST['password'];
				$p = static::crypt($l, $p);
				$data = $db->query($sql, $l, $p);
				if (1 !== sizeof($data)) {
					\API\Data\Error::instance()->set('Неверное имя пользователя или пароль');
					header('Location: ?logout');
				}
				foreach ($data[0] as $key => $value) {
					$_SESSION['auth'][$key] = $value;
				}
				$_SESSION['auth']['ttl'] = time(true) + static::$ttl;
//				$logs = new \API\Assistants\LogsDB();
//				\API\Data\Collector::instance()->set('model', 'authorization');
//				$logs->add();
			} elseif (!empty($_SESSION['auth'])) { //проверка сессии
				if ($_SESSION['auth']['ttl'] > time(true)) {
					$_SESSION['auth']['ttl'] = time(true) + static::$ttl;
				} else {
					\API\Data\Error::instance()->set('Время жизни сессии истекло!');
					header('Location: ?logout');
					return false;
				}
			} else {
				\API\Data\Error::instance()->set('Не определен параметр идентификации пользователя.');
				return false;
			}
			$db->query('update `' . $_table . '` set `last_login`=NOW() where `id`=' . $_SESSION['auth']['id'] . ';');
			return true;
		}

		static public function crypt($login, $password) {
			return sha1($login . $password);

		}

	}

}