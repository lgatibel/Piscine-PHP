#!/usr/bin/php
<?php
function ft_split($str)
{
	$tab;
	$i = 0;
	$cpt = 0;
	$start = 0;
	while (isset($str[$i]))
	{
		while ($str[$i] == ' ' || $str[$i] == '	')
			$i++;
		$start = $i;
		while(isset($str[$i]) && ($str[$i] != ' ' && $str[$i] != '	'))
		{
			$i++;
		}
		if ($i != $start)
		$tab[$cpt] = substr($str, $start, $i - $start);
		$cpt++;
	}
	return ($tab);
}
$res = 0;
if ($argc == 4)
{
	$i = 0;
	$str;
	$i = 1;
	while (isset($argv[$i]))
	{
		$str .= $argv[$i]." ";
		$i++;
	}
	$tab = ft_split($str);
	if ($tab[1] == '+')
		$res = $tab[0] + $tab[2];
	else if ($tab[1] == '-')
		$res = $tab[0] - $tab[2];
	else if ($tab[1] == '/')
		$res = $tab[0] / $tab[2];
	else if ($tab[1] == '%')
		$res = $tab[0] % $tab[2];
	else if ($tab[1] == '*')
		$res = $tab[0] * $tab[2];
	echo "$res\n";

}
else {
	echo ("Incorrect Parameters\n");
}
?>
