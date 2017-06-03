<?php
echo "<html><body>";
?>
<?php
if($_SERVER[PHP_AUTH_USER] == "zaz" && $_SERVER[PHP_AUTH_PW] == "jaimelespetitsponeys")
{
	$path = "../img/42.png";
	$file = file_get_contents($path);
	echo "\nBonjour Zaz<br />\n";
	echo "<img src='data:image/png;base64,";
	echo (base64_encode($file));
	echo "'>\n";
}
else{
	echo("Cette zone est accessible uniquement aux membres du site");
}
?>
</body></html>
