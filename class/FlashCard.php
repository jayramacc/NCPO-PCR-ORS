<?php

if (!isset($_SESSION)){
	session_start();
}

class FlashCard{
	protected static $flashMessage = null;

	public static function setFlashCard($message){
		$_SESSION["flashcard"] = $message;
		self::$flashMessage = $message;
	}

	public static function hasFlashCard(){
		if (isset($_SESSION["flashcard"])) {
			self::$flashMessage = $_SESSION['flashcard'];
			return true;
		}else{
			return false;
		}
	}

	public static function getFlashCard(){
		$flashCardValue = self::$flashMessage;
		$_SESSION["flashcard"] = null;
		self::$flashMessage = null;
		return $flashCardValue;
	}
}