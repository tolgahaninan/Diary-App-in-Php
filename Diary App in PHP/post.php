<?php 

include 'conn.php';
require_once 'databaseoperations.php';
require_once('registerlogin.php');



class Post extends DataControl{
  public $userId;
  public $post;
  public $username;
  public $variableUserId;

   function __construct($username,$post) {
    $this->username = $username;
    $this->post = $post;
    $this->trimData();
  	$this->stripslashesData();
   	$this->htmlspecialcharsData();
  }
  	public function idHandler(){
	$db = Conn :: getInstance();	
	$databaseoperations = new DatabaseOperations($this->username);	
	$this->variableUserId=$databaseoperations->getUserIdFromSession();	
  	} 

	public function submitPost(){
	$db = Conn :: getInstance();	
	echo "id : ".$this->variableUserId."Post : ".$this->post;
	$query = $db->prepare("INSERT INTO post SET idUser=? , post=?");
	$insert = $query->execute(array($this->variableUserId,$this->post));




	}

  public function trimData(){
  $this->post = trim($this->post);
  $this->username = trim($this->username);
  }
  public function stripslashesData(){
  $this->post = stripcslashes($this->post);
  $this->username = stripcslashes($this->username);
  }
  public function htmlspecialcharsData(){
  $this->post = htmlspecialchars($this->post);
  $this->username = htmlspecialchars($this->username);
  }









}










 ?>