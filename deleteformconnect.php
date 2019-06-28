<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mil";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if (isset($_POST['submit'])) {
	
	$name = mysqli_real_escape_string($conn, $_POST['name']);
}
	//error handlers 
	//check for empty fields
	if (empty($name)) 
	{
		header("location: deleteform.php?value=empty");
		exit();
	}
	else
	{
                    $sql="DELETE FROM employee WHERE name ='$name'";
							if($conn->query($sql) === TRUE) 
										{
											$message="Delted Sucessfully!";
											echo "<script type='text/javascript'>alert('$message');</script>";
											
           								 header('location: deleteform.php');
            							} 
							exit();
				
		}


?>