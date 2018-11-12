<html>
<head>
<title>
mailing page
</title>
<style>
</style>
</head>
<body>
<?php
	 session_start();
	$str1=$_SESSION['str'];
	$p=$_POST['mail'];
$to = $p;
$subject = 'Assignment submission details';
$txt = $str1;
$headers = 'From: sskolla0797@gmail.com';

if(mail($to,$subject,$txt,$headers))
{
	echo "<h1>email sent</h1>"; 
}
else{
echo "no sent";
}
?>
</body>
</html>
