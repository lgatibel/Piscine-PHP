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
		return ($tab);
	}

	function one_more_time($tab){
		$epoch = strtotime("January 1 1970 01:00:00");
		$month = array("Janvier" => "January", "Fevrier" => "February", "Mars" => "March", "Avril" => "April",
		"Mai" => "May", "Juin" => "June", "Juillet" => "July", "Aout" => "August", "Septembre" => "September",
		"Octobre" => "October", "Novembre" => "November", "Decembre" => "December");
		$day = array("Lundi" => "Monday", "Mardi" => "Tuesday", "Mercredi" => "Wednesday",
		"Jeudi" => "Thursday", "Vendredi" => "Friday", "Samedi" => "Saturday", "Dimanche" => "Sunday");

function check_month( $month, &$tab){
		foreach ($month as $key => $value) {
			if (!strnatcasecmp($tab[2], $key))
			{
				$tab[2] = $value;
				return (true);
			}
		}
		return (false);
	}
	function check_day($day, $month, &$tab){
			foreach ($day as $key => $value) {
				if (!strnatcasecmp($tab[0], $key))
				{
					$tab[0] = $value;
					if (check_month($month, $tab))
						return (true);
					break;
				}
			}
			return (false);
		}
		if (check_day($day, $month, $tab))
		{
			$i = 0;
			while (isset($tab[$i]))
			{
				 if (isset($tab[i + 1]))
				 	$str .= $tab[$i]." ";
				 else
					$str .= $tab[$i];
				$i++;
			}
			echo strtotime($str) - $epoch;
		}
	}
	date_default_timezone_set("Europe/Paris");
	$regex = "#^[a-zA-z]{1,1}[a-z]{4,7} [0-9]{1,2} [a-zA-Z]{1,1}[a-z]{2,8} [0-9]{4,4} [0-9]{2,2}:[0-9]{2,2}:[0-9]{2,2}$#";
	if (isset($argv[1]) && preg_match($regex, $argv[1], $match))
	{
		$tmp = ft_split($match[0]);
		one_more_time($tmp);

	}
	else if (isset($argv[1]))
		echo ("Wrong Format\n");
?>
