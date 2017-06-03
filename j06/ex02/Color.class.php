<?php
class Color{
	public $red = 0;
	public $green = 0;
	public $blue = 0;
	public static $verbose = False;

	public static function doc(){
		$file = "Color.doc.txt";
		$doc = file_get_contents($file);
		return ($doc);
	}

	public function __construct(array $tab){
		if ($tab['rgb']){
			$this->red = (intval($tab['rgb']) & 0xff0000) >> 16;
			$this->green = (intval($tab['rgb']) & 0x00ff00) >> 8;
			$this->blue = intval($tab['rgb']) & 0x0000ff;
		}
		else{
			if($tab['red']){
				$this->red = intval($tab['red']);
			}
			if($tab['green']){
				$this->green = intval($tab['green']);
			}
			if($tab['blue']){
				$this->blue = intval($tab['blue']);
			}
		}
		 if(self::$verbose){
			 printf("%s constructed.\n",$this);
		 }
		return;
	}

	public function add($old){
		return (new Color(array('red' => $this->red + $old->red, 'green' => $this->green + $old->green, 'blue' => $this->blue + $old->blue)));
	}

	public function sub($old){

		return (new Color(array('red' => $this->red - $old->red, 'green' => $this->green - $old->green, 'blue' => $this->blue - $old->blue)));
	}

	public function mult($nb){

		return (new Color(array('red' => intval($this->red * $nb), 'green' => intval($this->green * $nb), 'blue' => intval($this->blue * $nb))));
	}

	public function __toString(){
		return (sprintf("Color( red: %3d, green: %3d, blue: %3d )",$this->red, $this->green,$this->blue));
	}

	public function __destruct(){
		if(self::$verbose){
			printf("%s destructed.\n",$this);
		}
		return;
	}
}
?>
