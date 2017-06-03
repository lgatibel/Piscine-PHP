#!/usr/bin/php
<?php
$i = 0;
foreach ($argv as $value)
{
	if ($i > 0)
		echo "$value\n";
	$i++;
}
?>
