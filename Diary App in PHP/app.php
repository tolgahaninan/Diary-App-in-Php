<html>
<head> </head> 
<body> 
<?php 
session_start();
ob_start();
include 'registerlogin.php';
include 'post.php';
require_once 'conn.php';
 ?>

<h2>Welcome <?php echo $_SESSION["userSession"]; ?></h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<button type="submit" name="logout">logout <?php if(isset($_POST["logout"])){$logout = new Logout();}?></button> 
<button type="submit" name="showDiary" >Show Old Submited Diaries</button> 
</br></br>

<textarea style="height:30%; width:80%; resize: none;" name="postArea" placeholder="Enter Your diary" rows="10" cols="30"></textarea></br>
<button type="submit" name="submitPost"> Submit Post </button> 

</form>


<?php 
if (isset($_POST["submitPost"])){

if(!empty($_POST["postArea"])){
$sessionVariable = $_SESSION["userSession"];
$postVariable = $_POST['postArea'];
$postObject = new Post($sessionVariable,$postVariable);
$postObject -> idHandler();
$postObject -> submitPost();



}	

}
if (isset($_POST["showDiary"])){
header("Location:postspage.php");

}


 ?>



</body>

</html>