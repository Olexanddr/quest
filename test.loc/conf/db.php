<?php
	class DB{
		const USER = "tester";
		const PASSWORD = "P@ssw0rd1234";
		const HOST = "localhost";
		const DB = "test";

		public static function connToDB(){
			$user = self::USER;
			$pass = self::PASSWORD;
			$host = self::HOST;
			$db = self::DB;
			$conn = new PDO("mysql:dbname = $db;host = $host", $user, $pass);
			return $conn;
		}
	}
?>