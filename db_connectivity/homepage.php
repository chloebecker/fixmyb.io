<?php
	session_start();
	
	
	if(isset($_GET['error']))
	{
		if($_GET['error'] === "usernameAlreadyExists")
		{
			echo "<script type=\"text/javascript\">\n";
			echo "alert('Username Taken!');\n";
			echo "</script>\n";
		}
	}	
	elseif(isset($_POST['signUpButton']))
	{
		showSetupPage();
	}
	
	printHomePage();
	
	function printHomePage()
	{
		echo "<!DOCTYPE html>\n";
		echo "<html>\n";
		echo "\n";
		echo "<head>\n";
		echo "<meta content=\"en-us\" http-equiv=\"Content-Language\" />\n";
		echo "<meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\" />\n";
		echo "\n";
		echo "\n";
		echo "<!--  JS  -->\n";
		echo "<script src = \"modalStuff.js\"></script>\n";
		echo "<!--  Custom CSS  -->\n";
		echo "<link href = \"./css/homepage.css\" rel = \"stylesheet\" />\n";
		echo "<title>Fix My Bio!</title>\n";
		echo "</head>\n";
		echo "\n";
		echo "<body bgcolor=\"#0099FF\">\n";
		echo "\n";
		echo "<p class=\"auto-style1\">\n";
		echo "<img alt=\"Welcome to fixmybio.com !\" height=\"75\" src=\"./images/cooltext.png\" width=\"429\" /></p>\n";
		echo "<br />\n";
		echo "<br />\n";
		echo "<br />\n";
		echo "<br />\n";
		echo "<br />\n";
		echo "<br />\n";
		echo "<div class=\"auto-style1\" style=\"height: 129px\">\n";
		echo "		<input name=\"LoginButton\" style=\"width: 224px; height: 44px; background-color: #0099FF; border-color: #FFFFFF; color: #FFFFFF; font: normal normal normal x-large 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif\" tabindex=\"1\" type=\"button\" value=\"Sign in\" onclick=\"document.getElementById('id01').style.display='block'\" /><br />\n";
		echo "		<br />\n";
		echo "		<br />\n";
		echo "		<input class=\"buttonStyle\" name=\"RegisterButton\" style=\"width: 224px; height: 44px\" tabindex=\"2\" type=\"button\" value=\"Sign up\" onclick=\"document.getElementById('id02').style.display='block'\" />\n";
		echo "</div>\n";
		echo "\n";
		echo "\n";
		echo "<div id=\"id01\" class=\"modal\">\n";
		echo "  \n";
		echo "  <form method = \"POST\" class=\"modal-content animate\" action=\"./includes/login.inc.php\">\n";
		echo "\n";
		echo "    <div class=\"container\">\n";
		echo "      <label><b>Username</b></label>\n";
		echo "      <input type=\"text\" placeholder=\"Enter Username\" name=\"uid\" required />\n";
		echo "\n";
		echo "      <label><b>Password</b></label>\n";
		echo "      <input type=\"password\" placeholder=\"Enter Password\" name=\"pwd\" required />\n";
		echo "        \n";
		echo "      \n";
		echo "      \n";
		echo "      <button type=\"submit\">Login</button>\n";
		echo "      <input type=\"checkbox\" /> Remember me\n";
		echo "    </div>\n";
		echo "\n";
		echo "    <div class=\"container\" style=\"background-color:#f1f1f1\">\n";
		echo "      <button type=\"button\" onclick=\"document.getElementById('id01').style.display='none'\" class=\"cancelbtn\">Cancel</button>\n";
		echo "      <span class=\"psw\">Forgot <a href=\"#\">password?</a></span>\n";
		echo "    </div>\n";
		echo "  </form>\n";
		echo "</div>\n";
		echo "\n";
		echo "<div id=\"id02\" class=\"modal\">\n";
		echo "  \n";
		echo "  <form method = \"POST\" class=\"modal-content animate\" action=\"./includes/signup.inc.php\">\n";
		echo "\n";
		echo "    <div class=\"container\">\n";
		echo "      <label><b>First name</b></label>\n";
		echo "      <input type=\"text\" placeholder=\"First name\" name=\"first\" required/>\n";
		echo "\n";
		echo "      <label><b>Last name</b></label>\n";
		echo "      <input type=\"text\" placeholder=\"Last name\" name=\"last\" required>\n";
		echo "        \n";
		echo "	  <label><b>User ID</b></label>\n";
		echo "      <input type=\"text\" placeholder=\"Type some user name\" name=\"uid\" required>\n";
		echo "	  \n";
		echo "	  <label><b>Password</b></label>\n";
		echo "      <input type=\"password\" placeholder=\"Type a password\" name=\"pwd\" required>\n";
		echo "\n";
		echo "      <button type=\"submit\" name = 'signUpButton' value = 'signed up' >Sign me up!</button>\n";
		echo "    </div>\n";
		echo "\n";
		echo "    <div class=\"container\" style=\"background-color:#f1f1f1\">\n";
		echo "      <button type=\"button\" onclick=\"document.getElementById('id02').style.display='none'\" class=\"cancelbtn\">Cancel</button>\n";
		echo "    </div>\n";
		echo "  </form>\n";
		echo "</div>\n";
		echo "\n";
		echo "</body>\n";
		echo "\n";
		echo "</html>";
	}
	
	function showSetupPage()
	{
		
	}
?>
