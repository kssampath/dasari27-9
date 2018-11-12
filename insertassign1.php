 <?php
 session_start();
if(isset($_POST['branch']))
{
$bran=$_POST['branch'];
$sem=$_POST['sem'];
$sec=$_POST['section'];
$assgn=$_POST['assign'];// value of the assignment

$db = mysqli_connect("localhost", "root","", "dr_dasari_nagaraju");
$sql= "SELECT index1 FROM predefined  WHERE branch='$bran' and semester='$sem' and section='$sec'";
 $result = mysqli_query($db, $sql);
 $row = mysqli_fetch_assoc($result);
 $sql1=  $row["index1"];//here i get the index value
$w="index" ;
 $tablename=$w.$sql1.$assgn;//concatenate the two names
 $sql3= "create table $tablename(name VARCHAR(30),regno int PRIMARY KEY)";//creating the table using that concatinated name
  $result = mysqli_query($db, $sql3);
  $sql2 = "INSERT into $tablename(name,regno) (select name,regno from class1 where index1='$sql1')";
    $result = mysqli_query($db, $sql2);
 $_SESSION['branch']=$bran;
  $_SESSION['sec']=$sec;
  $_SESSION['sem']=$sem;
  $_SESSION['assg']=$assgn;
					$_SESSION['results'] = $results;
$_SESSION['tablename']=$tablename;
header("Location:insertassign2.php");
}
?>
					
 

