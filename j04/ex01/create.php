<?php
if ($_POST['login'] != "" && $_POST['passwd'] != "" && $_POST['submit'] === "OK")
{
	$path = "../private/";
	$file = "password";
	$all = array();
	$error = 0;

	if (file_exists($path.$file)){
		$str1 = file_get_contents($path.$file);
		$all = unserialize($str1);
		foreach ($all as $compte){
			if ($compte['login'] === $_POST['login']){
				$error = 1;
				break;
			}
		}
	}
	else
		mkdir($path);
	if (!$error){
		$all[] = array('login' => $_POST['login'], 'passwd' => hash("whirlpool",$_POST['passwd']));
		$str2 = serialize($all);
		file_put_contents($path.$file, $str2);
	}
}
else
	$error = 1;
if ($error)
	echo ("ERROR\n");
else
	echo ("OK\n");
?>
