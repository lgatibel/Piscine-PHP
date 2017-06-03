#!/usr/bin/php
<?php
function ft_split2($str)
{
	$tab;
	$i = 0;
	$cpt = 0;
	$start = 0;
	while (isset($str[$i]))
	{
		while (isset($str[$i]) && ($str[$i] == ' ' || $str[$i] == '	'))
			$i++;
		$start = $i;
		while(isset($str[$i]) && $str[$i] != ' ' && $str[$i] != '	')
		{
			$i++;

		}
		if ($i != $start)
			$tab[$cpt] = substr($str, $start, $i - $start);
		$cpt++;
	}

	return ($tab);
}

function epur_str2($str2)
{
	$tab = ft_split2($str2);
	$i = 0;
	$str;
	while (isset($tab[$i]))
	{
		if ($tab[$i + 1])
			$str .= $tab[$i]." ";
		else
			$str .= $tab[$i]."\n";
		$i++;
	}
		return($str);
}
 	$regex = "/^[a-zA-Z 	]{1,}$/";
	if(preg_match($regex ,$argv[1]))
 		echo epur_str2($argv[1]);
?>
