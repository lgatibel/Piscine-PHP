<?php
	session_start();
	if($_POST['logout'] != ""){
		$_SESSION['loggued_on_user'] = "";
		$_SESSION['ok'] = "";
		header('Location: index.html');
	}
	else if (!file_exists("../private/password"))
		header('Location: create.html');
	include('auth.php');
	if (auth($_POST['login'], $_POST['passwd']))
	{
		$compte = array("login" => $_POST['login'],"passwd" =>hash("whirlpool", $_POST['passed']));
		$_SESSION['loggued_on_user'] = serialize($compte);
		echo("<form method=\"post\" action\"login.php\">");
		echo("<input type=\"submit\" name=\"logout\" value=\"Logout\" style=\"background_color:red\" />");
		echo("</form>");
		echo ("<iframe name=\"chat\" src=\"chat.php\" width=\"100%\" height=\"550px\"></iframe>\n");
		echo ("<iframe name=\"speak\" src=\"speak.php\" width=\"100%\" height=\"60px\"></iframe>");
	}
	else{
		if($_SESSION['ok'] == "")
			header('Refresh:2; url=login.php');
		else
			header('Location: index.html');
		if($_SESSION['ok'] = "ok")
		$_SESSION['loggued_on_user'] = "";
		echo ("ERROR\n");
	}
?>
