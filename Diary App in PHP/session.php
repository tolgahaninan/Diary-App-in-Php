<?php 
class Session {

	function __construct($sessionUser) {
    session_start();
    ob_start();
    error_reporting(E_ALL & ~E_NOTICE);
	$_SESSION["userSession"] = $sessionUser;
  	}

	function destroySession (){
	session_unset();
	session_destroy();
	}

	function startSession (){
	session_start();
    ob_start();	

	}
}


?>