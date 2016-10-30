<?php
	session_start();
	include "dbh.php";
	require_once "utils.php";
	require_once "./includes/signup.inc.php";
	printDocHeading("https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css", 
					"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js",
					"https://code.jquery.com/jquery-2.1.1.min.js",
					"https://fonts.googleapis.com/icon?family=Material+Icons",
					"https://fonts.googleapis.com/css?family=Ubuntu",
					"./javascript/selectMaterialize.js",
					"./css/setupprofile.css", "Set Up Your Profile!");
	
	printBodyTagAndPageHeading("Set Up Profile");
	
	if(empty($_POST))
	{
		showSetupPage();
	}
	elseif(isset($_POST['submitInfo']))
	{
		showProfilePage();
	}
	
	function printBodyTagAndPageHeading($pageHeading)
	{
		print "<body>\n";
		print "<div class = 'container center-align'>\n";
		print "<h2> " . $pageHeading . "</h2>\n";
		print "</div>\n";
	}
	
	function showSetupPage()
	{
		$session_id = $_SESSION["id"];
		$conn = mysqli_connect("localhost", "root", "", "fixmybio");
		$query = "SELECT * FROM user WHERE id = '$session_id'";
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_assoc($result);
		
	}

?>