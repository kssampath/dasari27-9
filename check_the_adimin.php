<?php
ob_start();
$host="";
$username="";
$password="";
$db_name="";
$tbl_name="";

//connect to server and db_name
mysql_connect("$host","$username","$password");
echo "db connect <br>";
mysql_select_db("$db_name");
if(empty($_POST['username']))
{
    echo "UserName/Password is empty!";
    return false;
}
if(empty($_POST['password']))
{
    echo "Password is empty!";
    return false;
}
$username=$_POST['username']; 
$password=md5($_POST['pass']);


// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);


$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1) {
    echo "Success! $count";
} else {
    echo "Unsuccessful! $count";
}

ob_end_flush();
?>