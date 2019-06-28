<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "milloginnew";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if (isset($_POST['submit'])) {
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$hname = mysqli_real_escape_string($conn, $_POST['hname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$cpwd = mysqli_real_escape_string($conn, $_POST['cpwd']);
}
	//error handlers 
	//check for empty fields
	if (empty($name)|| empty($hname)|| empty($email)||empty($pwd)|| empty($cpwd)) 
	{
		header("location: signup.php?signup=empty");
		exit();
	}
	else
	{
		if(!preg_match("/^[a-zA-Z]*$/", $name)) 
		 	{
			header("location: signup.php?signup=invalid_Name");
			exit();
			}
		else{
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)) 
			{
			header("location: signup.php?signup=notvalid_email");
			exit();
			}
			else if(($pwd)!=($cpwd))
			{
			header("location: signup.php?signup=password_not_match");
			exit();
			}
				$sql = "SELECT * FROM logindetail WHERE hname='$hname'";
				$result = mysqli_query($conn,$sql);
				$resultcheck = mysqli_num_rows($result);

				if($resultcheck > 0)
				{
					header("location: signup.php?signup=habbo_username_taken");
					exit();
				} 
                   
                    $status='Unverified';
           			$row = mysqli_fetch_assoc($result);
					$sql= "INSERT INTO logindetail (name,hname,habboname,email,password,status) VALUES 
					('$name','$hname','$hname','$email','$pwd','$status');";
					mysqli_query($conn,$sql);
					
			if($name && $hname  && $email && $pwd) 
			{
            header('location: signupconfirm.php');
            } 
							exit();
				
		}
	}
?>