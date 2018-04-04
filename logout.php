<?php
session_start();

if (isset($_COOKIE['username'])) {
	setcookie("username",null, -1,'/');
	setcookie("type",null, -1,'/');
	setcookie("id",null, -1,'/');
}
session_destroy();

header("location: /");
exit();
