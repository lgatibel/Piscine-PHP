<?php
 session_start();
 ?>
<html><body>
<head>
<script langage="javascript">top.frames['chat'].location='chat.php';</script>
</head>
<?php

	if($_SESSION['loggued_on_user'] != "" && $_POST['msg'] != ""){
		$path = "../private/";
		$chat = "chat";
		$all = array();
		$compte = unserialize($_SESSION['loggued_on_user']);
		if (!file_exists($path)){
			mkdir($path);
		}
		if (file_exists($path.$chat)){
			$fd = fopen($path.$chat, "r");
			flock($fd, LOCK_EX);
			$all = unserialize(file_get_contents($path.$chat));
			flock($fd, LOCK_UN);
			fclose($fd);
		}
		date_default_timezone_set("Europe/Paris");
		$all[] = array("login" => $compte['login'], "time" => date("H:i"), "msg" => $_POST['msg']);
		$all = serialize($all);
		$fd =fopen($path.$chat, "w+");
		flock($fd, LOCK_EX);
		file_put_contents($path.$chat, $all);
		flock($fd, LOCK_UN);
		fclose($fd);
	}
	else if ($_POST['msg'] != "")
		echo ("ERROR\n");
 ?>
 <html><body >
 <form method="post" action="speak.php" >
 <textarea type="text" name="msg" value="" cols="100"/>
 </textarea>
 <input type="submit" name="submit" value="OK" />
 </form>
 </body></html>
