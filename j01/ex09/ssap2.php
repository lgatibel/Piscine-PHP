#!/usr/bin/php
<?php
function ft_same($a, $b){
	$na = 0;
	$nb = 0;
	if (($a >= 'a' && $a <= 'z') || ($a >= 'A' && $a <= 'Z'))
		$na = 3;
	else if ($a >= '0' && $a <= '9')
		$na = 2;
	else
		$na = 1;
	if (($b >= 'a' && $b <= 'z') || ($b >= 'A' && $b <= 'Z'))
		$nb = 3;
	else if ($b >= '0' && $b <= '9')
		$nb = 2;
	else
		$nb = 1;
	return ($nb - $na);
}

function ft_sort ($tab, $tmp) {
	$i = 0;
	$ret = 0;
	$res = 0;
	while (isset($tab[$i][0]) && isset($tmp[$i][0]))
	{
		if (!($ret = ft_same($tab[$i], $tmp[$i]))){
			if (isset($tab[$i]) && isset($tmp[$i]) &&
			($res = strncasecmp($tab[$i], $tmp[$i], 1)))
				return (ord($tab[$i]) - ord($tmp[$i]));
		}
		 else
			return (($ret > 0)? 1: -1);
		$i++;
	}
	if (isset($tab[$i]) && !isset($tmp[$i]))
		return (1);
	else if (!isset($tab[$i]) && isset($tmp[$i]))
		return (-1);
	return (0);
}
function ft_split($str)
{
	$tab;
	$i = 0;
	$cpt = 0;
	$start = 0;
	while (isset($str[$i]))
	{
		while ($str[$i] == ' ')
			$i++;
		$start = $i;
		while(isset($str[$i]) && $str[$i] != ' ')
		{
			$i++;
		}
		if ($i != $start)
		$tab[$cpt] = substr($str, $start, $i - $start);
		$cpt++;
	}
	usort($tab, "ft_sort");
	return ($tab);
}
$i = 1;
while (isset($argv[$i]))
{
	$str .= $argv[$i]." ";
	$i++;
}
$tab = ft_split($str);
foreach ($tab as $value)
{
	echo "$value\n";
}
?>
