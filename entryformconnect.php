<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mil";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if (isset($_POST['submit'])) {
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$rank = mysqli_real_escape_string($conn, $_POST['rank']);
	$updatedate = mysqli_real_escape_string($conn, $_POST['updatedate']);
	$feats = mysqli_real_escape_string($conn, $_POST['feats']);
}
	//error handlers 
	//check for empty fields
    $posted_data=$_SESSION["hname"];
    $_POST['updatedby']=$posted_data;
    $updatedby = $_POST['updatedby'];

	if (empty($name)|| empty($rank)|| empty($updatedby)||empty($updatedate)) 
	{
	    header("location: entryform.php?entryform=empty");
		exit();
	}
	else
	{
		$sql = "SELECT * FROM employee WHERE name='$name'";
				$result = mysqli_query($conn,$sql);
				$resultcheck = mysqli_num_rows($result);

				if($resultcheck > 0)
				{
					$sql = "UPDATE employee SET rank='$rank', updatedby='$updatedby', updatedate='$updatedate', feats='$feats' WHERE name='$name'";
					mysqli_query($conn,$sql);
					header('location: entryformconfirmupdate.php');
					
				} 
            else 
            {
           			$row = mysqli_fetch_assoc($result);
					$sql= "INSERT INTO employee (name,rank,updatedby,updatedate,feats) VALUES 
					('$name','$rank','$updatedby','$updatedate','$feats');";
					mysqli_query($conn,$sql);
					header('location: entryformconfirm.php');
			}
				
		
	}
?>