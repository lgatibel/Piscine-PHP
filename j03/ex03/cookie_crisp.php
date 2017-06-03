<?php
    if ($_GET[action] == "set")
      setcookie($_GET[name], $_GET[value],time() + 3600);
    else if ($_GET[action] == "del")
		setcookie($_GET[name], "");
	else if ($_GET[action] == "get"){
		$name = $_GET[name];
		if ($_COOKIE[$name] != "")
	   		echo "$_COOKIE[$name]\n";
	}
 ?>
