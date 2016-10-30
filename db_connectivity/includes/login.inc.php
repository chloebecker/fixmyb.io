<?php
	session_start();
	include "../dbh.php";

	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	
	$query = "SELECT * FROM user WHERE uid = '$uid'";
	$result = mysqli_query($conn, $query);

	$row = mysqli_fetch_assoc($result);

	$hash_pwd = $row['pwd'];
	$hash = password_verify($pwd, $hash_pwd);

	if($hash == 0)
	{
		header("Location: ../homepage.php?error=empty"); //this header function may take a different location
		exit();
	}
	else 
	{
		$query = "SELECT * FROM user WHERE uid = '$uid' AND pwd = '$hash_pwd'";
		$result = mysqli_query($conn, $query);

		if(!$row = mysqli_fetch_assoc($result))
		{
			print "Your username or password is incorrect!";
		}
		else 
		{
			$_SESSION['id'] = $row['id']; 
		}
		
		header("Location: ../dashboard.php");
	}
	

?>