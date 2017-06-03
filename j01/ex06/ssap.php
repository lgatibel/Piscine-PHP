#!/usr/bin/php
<?php
function ft_split($str){
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
	if (isset($tab))
		sort($tab);
	return ($tab);
}

$i = 1;
while (isset($argv[$i]))
{
		$str .= $argv[$i]." ";
	$i++;
}
$tab = ft_split($str);
if (isset($tab))
foreach ($tab as $value)
{
	echo "$value\n";
}
?>
