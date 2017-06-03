<?php
	session_start();
	if ($_SESSION['loggued_on_user'] && $_SESSION['loggued_on_user'] != ""){
		$compte = unserialize($_SESSION['loggued_on_user']);
		echo ("$compte[login]\n");
	}
	else
		echo ("ERROR\n");
 ?>
