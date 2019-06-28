<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "milloginnew";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if (isset($_POST['submit'])) {
	$habboname = mysqli_real_escape_string($conn, $_POST['habboname']);
	$status = mysqli_real_escape_string($conn, $_POST['status']);
}
	//error handlers 
	//check for empty fields
    $posted_data=$_SESSION["hname"];
    $_POST['updatedby']=$posted_data;
    $updatedby = $_POST['updatedby'];

	if (empty($habboname)|| empty($status)|| empty($updatedby)) 
	{ echo $status;
	   // header("location: status.php?entryform=empty");
		//exit();
	}
//
else
		{
		$sql="SELECT * FROM logindetail WHERE habboname ='$habboname'";
		$result= mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);

		if($resultcheck < 1)
		{
			header("location: status.php?login=error_wrong_username_you_are_updating");
			exit();
		}
	
	   else
	   {
	   	$row = mysqli_fetch_assoc($result);
					$sql= "UPDATE logindetail SET status='$status', updatedby='$updatedby' WHERE habboname='$habboname'";
					mysqli_query($conn,$sql);
					header('location: statusconfirm.php');
       }
}

?>