<?php
	function auth($login, $passwd){
		if ($login != "" && $passwd != "")
		{
			$path = "../private/";
			$file = "password";
			$passw = hash("whirlpool", $passwd);
			$str1 = file_get_contents($path.$file);
			$all = unserialize($str1);
			foreach ($all as $compte){
				if ($compte['login'] == $login &&
			$compte['passwd'] == $passw){
				return (TRUE);
				}
			}
		}
		return (FALSE);
	}
?>
