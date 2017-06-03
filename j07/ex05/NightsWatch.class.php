<?php
class NightsWatch{
	public function fight(){
		return;
	}
	public function recruit($soldier){
		if ($soldier instanceof JonSnow){
			$soldier->fight();
		}
		else if ($soldier instanceof SamwellTarly){
			$soldier->fight();
		}
		return;
	}
}
?>
