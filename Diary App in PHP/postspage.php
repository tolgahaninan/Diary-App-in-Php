<?php 
require_once 'user.php';
session_start();
 ?>

 <html>
 <head>
 	<title> Posts</title>
 </head>
 <body>	
 	 <form method="post" action="app.php">
 	 <button type="submit" name="goBack" >Go Back </button> 	
 	 </form>

 	<?php 

 	$user = new User($_SESSION['userSession']);	
 	$user->idHandler();

 	$db = Conn :: getInstance();	
	$query = $db->prepare("SELECT * FROM post WHERE idUser=:idUser");
    $fetch = $query->execute(array('idUser' => $user->variableUserId));
    while($fetched = $query->fetch(PDO::FETCH_ASSOC)){
    
    echo "<h2>". $fetched['time'];"</h2>";
    echo "<p>". $fetched['post'];"</p>";
  

   }

 ?>




 
 </body>
 </html>