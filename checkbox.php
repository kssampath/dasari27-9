<html>  
    <head>  
        <title>Update Multiple Mysql Data using Checkbox with Ajax in PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
          
    </head>  
    <body>  
        <div class="container">  
            <br />
   <div class="table-responsive">  
    <h3 align="center">Update Multiple Mysql Data using Checkbox with Ajax in PHP</h3><br />
    <form method="post" id="update_form">
                    <div align="left">
                        <input type="submit" name="multiple_update" id="multiple_update" class="btn btn-info" value="Multiple Update" />
                    </div>
                    <br />
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th width="10%">  <button type="button" class="btn btn-primary">submit</button></th>
                                <th width="40%">Name</th>
                                <th width="50%">regno</th>
                            </thead>
                            <?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><input type="checkbox" name="chk[]" value="<?php echo $row["id"] ?>"></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['contact']; ?></td>
			<td><?php echo $row['departmentid']; ?></td>
		</tr>
	<?php } ?>
                        </table>
                    </div>
                </form>
   </div>  
  </div>
    </body>  
</html>  
<?php $db = mysqli_connect("localhost", "root","123sai", "render"); $results = mysqli_query($db, "SELECT * FROM employees");
if(isset($_REQUEST["submit"]))
{
	$chk=$_REQUEST["chk"];
	$a=implode(",",$chk);
	mydql_query("delete from user where reg in ($a)");
}
?>