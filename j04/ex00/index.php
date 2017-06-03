<?php
	session_start();
?>
<html><body>
<form method="get" action="index.php">
<?php
	if ($_GET[submit] === "OK"){
		$_SESSION[login] = $_GET[login];
		$_SESSION[passwd] = $_GET[passwd];
	}
		echo ("  identifiant: <input type=\"text\" name=\"login\" value=\"".$_SESSION[login]."\" />\n  <br />\n");
		echo ("  mot de passe <input type=\"password\" name=\"passwd\" value=\"".$_SESSION[passwd]."\" /></br>\n");
		echo ("  <input type=\"submit\" name=\"submit\" value=\"OK\" >\n");
?>
</form>
</body></html>
