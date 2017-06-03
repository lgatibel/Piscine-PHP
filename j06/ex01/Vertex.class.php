<?php
class Vertex{
	public static $verbose = False;
	private $_x;
	private $_y;
	private $_z;
	private $_w;
	private $_color;

	public static function doc(){
		$file = "Vertex.doc.txt";
		$doc = file_get_contents($file);
		return ($doc);
	}
	public function __construct(array $tab){
		$this->setX($tab['x']);
		$this->setY($tab['y']);
		$this->setZ($tab['z']);
		$this->setW($tab['w']);
		$this->setColor($tab['color']);
		if (self::$verbose){
			print($this." constructed\n");
		}
		return;
	}

	public function setX($x){
		$this->_x = $x;
		return;
	}

	public function setY($y){
		$this->_y = $y;
		return;
	}

	public function setZ($z){
		$this->_z = $z;
		return;
	}

	public function setW($w = 1){
		if (!isset($w)){
			$this->_w = 1.0;
		}
		else{
			$this->_w = $w;
		}
		return;
	}

	public function setColor($rgb){
		if (!isset($rgb)){
			$this->_color = new Color(array('red' => 255, 'green' => 255, 'blue' => 255));
		}
		else{
			$this->_color = $rgb;
		}
		return;
	}

	public function getX(){
		return ($this->_x);
	}
	public function getY(){
		return ($this->_y);
	}

	public function getZ(){
		return ($this->_z);
	}

	public function getW(){
		return ($this->_w);
	}

	public function getColor(){
		return ($this->_color);
	}

	public function __toString(){
		$str = sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f",
		$this->getX(), $this->getY(), $this->getZ(), $this->getW());
		if (self::$verbose){
			$str .= ", {$this->_color} )";
		}
		else{
			$str .= " )";
		}
		return ($str);
	}

	public function __destruct(){
		if (self::$verbose){
			print($this." destructed\n");
		}
		return;
	}
}
?>
