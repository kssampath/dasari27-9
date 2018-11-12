 <?php
 session_start();
 ?>
<html>  
    <head>  
        <title>Update</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
          
    </head>  
    <body>  
        <div class="container">  
            <br />
   <div class="table-responsive">  
    <h3 align="center"> assignment submission details</h3><br/>
    <form method="POST" action="<?php echo  $_SERVER['PHP_SELF']; ?>">
                    <div align="left">
                    </div>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                             <th width="10%">  <input type="submit" name="delete" value="Delete Multiple"></th>
                                <th width="40%">Name</th>
                                <th width="50%">regno</th>
                            </thead>
							<?php 
							$db = mysqli_connect("localhost", "root","", "dr_dasari_nagaraju");
							$tablename=$_SESSION["tablename"];
							$results = mysqli_query($db, "SELECT * FROM $tablename");
							?>
                           	 <?php 	while ($row = mysqli_fetch_array($results)){ ?>
		<tr>
			<td align="center"><input type="checkbox" name="chk[]"  class="checkbox" value='<?php echo $row["regno"]; ?>'/></td>
			<td><?php echo $row["name"]; ?></td>
			<td><?php echo $row["regno"]; ?></td>
		</tr>
	<?php }?>
	<?php
if(isset($_POST["delete"]))
{
	for($i=0;$i<count($_POST['chk']);$i++)
{
 $row_no=$_POST['chk'][$i];
 $r=mysqli_query($db,"delete from $tablename where regno='$row_no'");
}
header("location: ". $_SERVER['PHP_SELF']);
	}				
?>		
                        </table>
                    </div>
                </form>
   </div>  
  </div>
<a href="gernerate.php">Generate mail</a>
    </body>  
</html>