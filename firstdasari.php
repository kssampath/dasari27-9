
 <?php

 session_start();
 $name=$password="";
if(isset($_POST["name"])){
 $_SESSION['name']=$_POST["name"];
$_SESSION['pass']=$_POST["pass"];
 }
$name= $_SESSION['name'];
$password=$_SESSION['pass'];

$ivemail="";
$invpas="";
if($name!="Dasari Nagaraju")
{
	   echo "connetion failed"; 
}
else{
header("Location:firstdasari1.php");
  }?>
