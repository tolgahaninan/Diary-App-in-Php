<?php 


abstract class DataControl {
abstract public function trimData();
abstract public function stripslashesData();
abstract public function htmlspecialcharsData();
}

class Register extends DataControl{
	
  public $username;
  public $password;

  function __construct($username,$password) {
    $this->username = $username;
    $this->password = $password;
  }


  public function trimData(){
  $this->username = trim($this->username);
  $this->password = trim($this->password);
  }
  public function stripslashesData(){
  $this->username = stripcslashes($this->username);
  $this->password = stripcslashes($this->password);
  }
  public function htmlspecialcharsData(){
  $this->username = htmlspecialchars($this->username);
  $this->password = htmlspecialchars($this->password);
  }
   function insert(){
   $this->trimData();
   $this->stripslashesData();
   $this->htmlspecialcharsData();
   
  	$db = Conn :: getInstance();
	$query = $db->prepare("INSERT INTO user SET userUsername=?,userPassword=?");
	$insert = $query->execute(array($this->username,$this->password));

  }

}

class Login extends DataControl{

	public $username;
 	public $password;

  function __construct($username,$password) {
  	$this->username = $username;
    $this->password = $password;
    $this->trimData();
  	$this->stripslashesData();
   	$this->htmlspecialcharsData();
  	}

  function log(){


    $db = Conn :: getInstance();
 	$query = $db->prepare("SELECT * FROM user WHERE userUsername=:username and userPassword=:password ");
    $fetch = $query->execute(array('username' => $this->username, 'password' => $this->password));

     $ifMatch=$query->rowCount();


     if($ifMatch == 1){
     Header("Location:../IPFINAL/app.php");

     $session = new Session($this->username);
     echo $_SESSION["userSession"];

     }
     else{
      echo "Giriş Başarısız";
      Header("Location:../IPFINAL?durum=basarisizgiris");

     }
  }
  public function trimData(){
  $this->username = trim($this->username);
  $this->password = trim($this->password);
  }
  public function stripslashesData(){
  $this->username = stripcslashes($this->username);
  $this->password = stripcslashes($this->password);
  }
  public function htmlspecialcharsData(){
  $this->username = htmlspecialchars($this->username);
  $this->password = htmlspecialchars($this->password);
  }

}

class Logout {
 
 function __construct(){
 	session_start();
	session_destroy();
	Header("Location:../IPFINAL?durum=logout");


 }




}



 ?>

