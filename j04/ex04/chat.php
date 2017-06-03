
<?php
	$path = "../private/";
	$file = "password";
	$chat = "chat";

	if (file_exists($path.$chat)){
		$fd = fopen($path.$chat, "r");
		flock($fd, LOCK_EX);
		$message = unserialize(file_get_contents($path.$chat));
		flock($fd, LOCK_UN);
		fclose($fd);
		foreach($message as $key => $value){
			echo("[$value[time]] <b>$value[login]</b>: $value[msg]<br />\n");
		}
	}
?>
