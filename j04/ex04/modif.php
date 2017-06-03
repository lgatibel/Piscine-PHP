<?php
if ($_GET['refresh'] === "true")
	header('Location: index.html');
else
	header("Refresh:3; url=create.php?refresh=true")
 ?>
<?php
$path = "../private/";
$file = "password";

if ($_POST['login'] != "" && $_POST['oldpw'] != "" && $_POST['newpw'] &&
 $_POST['submit'] === "OK" && file_exists($path.$file))
{
	$all = array();
	$error = 1;
	$oldpassw = hash("whirlpool", $_POST['oldpw']);
	$str1 = file_get_contents($path.$file);
	$all = unserialize($str1);
	foreach ($all as &$compte){
		if ($compte['login'] === $_POST['login'] &&
	$compte['passwd'] == $oldpassw){
		$compte['passwd'] = hash("whirlpool", $_POST['newpw']);
		$str2 = serialize($all);
		file_put_contents($path.$file, $str2);
			$error = 0;
			break;
		}
	}
}
else
	$error = 1;
if (!$error)
	echo ("OK\n");
else
	echo ("ERROR\n");
?>
