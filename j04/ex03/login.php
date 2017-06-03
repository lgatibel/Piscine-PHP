<?php
	session_start();
	include('auth.php');
	if (auth($_GET['login'], $_GET['passwd']))
	{
		$compte = array("login" => $_GET['login'],"passwd" =>hash("whirlpool", $_GET['passed']));
		$_SESSION['loggued_on_user'] = serialize($compte);
		echo ("OK\n");
	}
	else{
		$_SESSION['loggued_on_user'] = "";
		echo ("ERROR\n");
	}
?>
