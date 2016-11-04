<?php

namespace zazanik\hw\components;

class Db
{

		public static function getConnection()
		{
			$paramsPath = ROOT . '/application/config/db_params.php';
			$params = include($paramsPath);


			$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
			$db = new \PDO($dsn, $params['user'], $params['password']);
			$db->exec("SET CHARACTER SET utf8");

			return $db;
		}
}