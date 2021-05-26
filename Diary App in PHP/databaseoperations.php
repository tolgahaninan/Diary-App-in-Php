<?php 
require_once 'conn.php';




interface DatabaseInterface {
public function getUserIdFromSession();
public function getAllPostOfUser();
	
}

class DatabaseOperations implements DatabaseInterface {



 public $sessionUsername;


  function __construct($sessionUsername) {

  $this->sessionUsername=$sessionUsername;
  
  }


  public function getUserIdFromSession(){
 
  	

/*  $query = $db->prepare("SELECT * FROM user WHERE userUsername=:username");
  $fetch = $query->execute(array('username' => $this->sessionUsername));*/

    $db = Conn :: getInstance();
 /*	$query = $db->prepare("SELECT * FROM USER WHERE userUsername=:username ");
    $fetch = $query->execute(array('username' => $this->sessionUsername));*/

     $query = $db->prepare("SELECT * FROM user WHERE userUsername=:username");

     $fetch = $query->execute(array('username' => $this->sessionUsername));
     $fetched = $query->fetch(PDO::FETCH_ASSOC);


 	 return $fetched['userId'];
  }

  public function getAllPostOfUser(){
  	 $db = Conn :: getInstance();
  	 $query = $db->prepare("SELECT * FROM post WHERE idUser=:idUser");
     $fetch = $query->execute(array('idUser' => $this->sessionUsername));
     $fetched = $query->fetch(PDO::FETCH_ASSOC);


	return $fetched;


}



}

 ?>
