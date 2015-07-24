<?php
namespace API\Lib {
	class Auth {
		static public
			$ttl = 900; // время жизни сессии в секундах

		static public function check() {
			if (!session_id()) {
				$_SESSION['error']['message'] = 'Сессия не открыта!';
				return false;
			} elseif (isset($_REQUEST['logout'])) {
				session_destroy();
				return false;
			} elseif (!empty($_REQUEST['login']) && !empty($_REQUEST['password'])) { // проверка БД
				$db = \API\Lib\DB::init(\API\Config\Parameters::$sqlType);
				$_table = _makeTableName(\API\Config\Parameters::$tablePrefix, 'administrators');
				$sql = 'select * from `' . $_table . '` where `email`=? and `password`=? limit 1;';
				$l = $_REQUEST['login'];
				$p = $_REQUEST['password'];
				$p = static::crypt($l, $p);
				$data = $db->query($sql, $l, $p);
//die($db->showQuery($sql, $l, $p));
				if (1 !== sizeof($data)) {
					$_SESSION['error']['message'] = \API\Config\Error::$msg = 'Неверное имя пользователя или пароль';
					header('Location: ?logout');
					//throw new \Exception('SQL error in query: ' . $db->showQuery($sql, $l, $p));
				}
				foreach ($data[0] as $key => $value) {
					$_SESSION['auth'][$key] = $value;
				}
				$_SESSION['auth']['ttl'] = time(true) + static::$ttl;
				return true;
			} elseif (!empty($_SESSION['auth'])) { //проверка сессии
				if ($_SESSION['auth']['ttl'] > time(true)) {
					$_SESSION['auth']['ttl'] = time(true) + static::$ttl;
					return true;
				} else {
					$_SESSION['error']['message'] = 'Время жизни сессии истекло!';
					header('Location: ?logout');
					return false;
				}
			} else {
				$_SESSION['error']['message'] = 'Не определен параметр идентификации пользователя.';
				return false;
			}
		}

		static public function crypt($login, $password) {
			return sha1($login . $password);

		}

	}

}