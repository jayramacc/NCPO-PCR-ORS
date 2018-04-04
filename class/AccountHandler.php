<?php

if (!isset($_SESSION)){
	session_start();
}

class AccountHandler {

	protected static $logUser;
	protected static $logAccountType;
	protected static $logAccountId;

	public static function getUsername(): string {
		return self::$logUser;
	}

	public static function getAccountId(): string {
		return self::$logAccountId;
	}

	public static function getAccountType(): string {
		return self::$logAccountType;
	}

	public static function isLogin(): bool {

		if (isset($_SESSION["username"]) && isset($_SESSION["type"]) && isset($_SESSION["id"])) {
			self::$logUser = $_SESSION['username'];
			self::$logAccountType = $_SESSION['type'];
			self::$logAccountId = $_SESSION['id'];
			return true;
		}elseif (isset($_COOKIE['username'])&& isset($_COOKIE["type"]) && isset($_COOKIE["id"])) {
			$_SESSION['username'] = $_COOKIE['username'];
			$_SESSION['type'] = $_COOKIE['type'];
			$_SESSION['id'] = $_COOKIE['id'];

			self::$logUser = $_SESSION['username'];
			self::$logAccountType = $_SESSION['type'];
			self::$logAccountId = $_SESSION['id'];

			return true;
		}else{
			return false;
		}
	}

}