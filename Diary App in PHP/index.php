<html>
	<head>
		<title> IP2 FINAL</title>
	<link rel="stylesheet" href="styles.css">
	</head>
<?php 
		
		include 'registerlogin.php';
		include 'conn.php';
		include 'session.php';
	
		


		$db = Conn :: getInstance();
		session_start();
		
		

 ?>
	<body>
		<?php 
	$error="";
		if(isset($_POST['submitLogin'])){
	
		if(empty($_POST["username"])){
			$error="Please fill all the blanks";

		}
		elseif (empty($_POST["username"])){
			$error="Please fill all the blanks";


		}else{

		$username = $_POST['username'];
		$password = $_POST['password'];
		$login = new Login($username,$password);
		$login->log();

		}


		}

		if(isset($_POST['submitRegister'])){


		if(empty($_POST["username"])){
			$error="Please fill all the blanks";

		}
		elseif (empty($_POST["username"])){
			$error="Please fill all the blanks";	


		}else{	
		$username = $_POST['username'];
		$password = $_POST['password'];
		$register = new Register($username,$password);
		$register->insert();
	}
			
		} 
	?>



	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
	    
		    <input type="text" placeholder="Enter Username" name="username" ></br></br>

		  	<input type="password" placeholder="Enter Password" name="password" ></br></br>

		    <button type="submit" name="submitLogin">Login</button> 
		   	</br></br> 
		    <button type="submit" name="submitRegister">Register</button>
		    <span class="error"> <?php echo $error; if(isset($_GET["durum"])){echo $_GET["durum"];}?> </span>


	</form>

	

	</body>
</html>