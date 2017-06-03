#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
	$i = 0;
	while (isset($tab[$i]) && isset($tab[$i + 1]))
	{
		if ((strcmp($tab[$i], $tab[$i + 1]) > 0))
		{
			return (false);
		}
			$i++;
	}
	return (true);
}
?>
