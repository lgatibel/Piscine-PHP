<?php
function ft_split($str)
{
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
?>
