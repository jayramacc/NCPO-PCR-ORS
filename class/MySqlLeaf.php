<?php

class MySqlLeaf {
	private static $dbCon = NULL;

	public static function getCon() {
		if (self::$dbCon === NULL){

			try {
				$db = mysqli_connect(
					"localhost",
					"root",
					"",
					"ncpo"
				);
			} catch(Exception $e) {
				echo $e->getMessage();
				$db = NULL;
			}

			self::$dbCon = $db;
		}

		return self::$dbCon;
	}

}