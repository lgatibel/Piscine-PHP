<?php
class Vector{
	private $_x;
	private $_y;
	private $_z;
	private $_w;
	public static $verbose = False;

	public static function doc(){
		$file = "Vector.doc.txt";
		$doc = file_get_contents($file);
		return ($doc);
	}
	public function __construct(array $tab){
		$this->setX($tab['dest']->getX());
		$this->setY($tab['dest']->getY());
		$this->setZ($tab['dest']->getZ());
		$this->setW();
		$tab['orig'] = new Vertex(array( 'x' => 0, 'y' => 0, 'z' => 0, 'w' => 1));
		if (self::$verbose){
			printf("%s constructed\n",$this);
		}
		return;
	}

	// public function magnitude(): float{
	// 	return;
	// }

	// public function normalize(): Vector{
	// 	return;
	// }
	//
	// public function add(Vector $rhs): Vector{
	// 	return;
	// }
	//
	// public function sub(Vector $rhs): Vector{
	// 	return;
	// }
	//
	// public function opposite(): Vector{
	// 	return;
	// }
	//
	// public function scallarProduct($k): Vector{
	// 	return;
	// }
	//
	// public function dotProduct(Vector $rhs): float{
	// 	return;
	// }
	//
	// public function cos(Vector $rhs): float{
	// 	return;
	// }
	//
	// public function crossProduct(): Vector{
	// 	return;
	// }
	private function setX($x){
		$this->_x = $x;
		return;
	}

	private function setY($y){
		$this->_y = $y;
		return;
	}

	private function setZ($z){
		$this->_z = $z;
		return;
	}

	private function setW(){
			$this->_w = 0;
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

	public function __toString(){
		$str = sprintf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f )",$this->getX(),$this->getY(),$this->getZ(),$this->getW());
		return $str;
	}
	public function __destruct(){
		if (self::$verbose){
			printf("%s destructed\n",$this);
		}
		return;
	}
}
require_once 'Vertex.class.php';

Vertex::$verbose = False;

print( Vector::doc() );
Vector::$verbose = True;


$vtxO = new Vertex( array( 'x' => 0.0, 'y' => 0.0, 'z' => 0.0 ) );
$vtxX = new Vertex( array( 'x' => 1.0, 'y' => 0.0, 'z' => 0.0 ) );
$vtxY = new Vertex( array( 'x' => 0.0, 'y' => 1.0, 'z' => 0.0 ) );
$vtxZ = new Vertex( array( 'x' => 0.0, 'y' => 0.0, 'z' => 1.0 ) );

$vtcXunit = new Vector( array( 'orig' => $vtxO, 'dest' => $vtxX ) );
$vtcYunit = new Vector( array( 'orig' => $vtxO, 'dest' => $vtxY ) );
$vtcZunit = new Vector( array( 'orig' => $vtxO, 'dest' => $vtxZ ) );

print( $vtcXunit . PHP_EOL );
print( $vtcYunit . PHP_EOL );
print( $vtcZunit . PHP_EOL );

$dest1 = new Vertex( array( 'x' => -12.34, 'y' => 23.45, 'z' => -34.56 ) );
Vertex::$verbose = True;
?>
