
<?php


 if(isset($_POST["Import"])){
		
		$filename=$_FILES["file"]["tmp_name"];		

$con = getdb();
		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
	        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {


	           $sql = "INSERT into csvfile (name,regno) 
                   values ('".$getData[0]."','".$getData[1]."')";
                   $result = mysqli_query($con, $sql);
				if(!isset($result))
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							
						  </script>";		
				}
				else {
					  echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");

					</script>";
				}
	         }
			
	         fclose($file);	
		 }
	}	 


 ?>
