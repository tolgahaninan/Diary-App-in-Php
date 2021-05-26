<?php 
require_once 'conn.php';
require_once 'databaseoperations.php';
	
class User {
	public $userId;
	public $username;
	public $variableUserId;


	 function __construct($username) {
	 $this->username = $username; 
	 }

	 function idHandler (){
	 $db = Conn :: getInstance();	
	 $databaseoperations = new DatabaseOperations($this->username);	
	 $this->variableUserId=$databaseoperations->getUserIdFromSession();	
	 }

	



}




 ?>
