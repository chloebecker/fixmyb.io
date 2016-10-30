<?php
	session_start();
	include "../dbh.php";
 
	$first = htmlentities($_POST['first'], ENT_QUOTES);
	$last = htmlentities($_POST['last'], ENT_QUOTES);
	$uid = htmlentities($_POST['uid'], ENT_QUOTES);
	$pwd = $_POST['pwd'];
	
	$query = "SELECT uid FROM user WHERE uid = '$uid'";
	$result = mysqli_query($conn, $query);
	$uidcheck = mysqli_num_rows($result);
	if($uidcheck > 0)
	{
		header("Location: ../homepage.php?error=usernameAlreadyExists"); //this header function may take a different location		
		
		exit();
	}
	else 
	{
		$hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);
		$query = "INSERT INTO user (first, last, uid, pwd) VALUES ('$first', '$last', '$uid', '$hashed_pwd')";
		$query2 = "SELECT id FROM user WHERE uid = '$uid'";
		$result = mysqli_query($conn, $query);
		$result2 = mysqli_query($conn, $query2);
		$row = mysqli_fetch_assoc($result2);
		
		$_SESSION['id'] = $row['id'];	
		header("Location: ../setupprofile.php");
	}
		
	
	

?>