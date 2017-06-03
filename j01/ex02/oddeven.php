#!/usr/bin/php
<?php
while (1)
{
	echo "Entrez un nombre: ";
	$str = fgets(STDIN);
	$nbr = substr($str, 0, -1);
	if (!strlen($str))
		Break;
	else if (!is_numeric($nbr))
		echo "'$nbr' n'est pas un chiffre\n";
	else if ($nbr %2 == 0)
		echo "Le chiffre ".$nbr." est Pair\n";
	else if ($nbr %1 == 0)
		echo "Le chiffre ".$nbr." est Impair\n";
}
echo "^D\n";
?>
