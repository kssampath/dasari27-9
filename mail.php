<html>
<head>
<title>
input the Mailid 
</title>
<style>

</head>
<body>
	<?php 
	 session_start();
		$b=$_SESSION['branch'];
		$c=$_SESSION['sec'];
		$z=$_SESSION['assg'];
		?>
<form  method="POST" action="mail69.php">
  Email of the Class <?php echo "$b.$c"?> : <input type="text" name="mail" value=""><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>