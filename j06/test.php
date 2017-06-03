<?php
class Exemple {
	public $foo = 2;
	private $lol = 0;
	public static function help(){
		echo("debrouille toi gros\n");
		return;
	}
	public function __construct(){
		print( 'Constructor called'. PHP_EOL);
		return;
	}
	public function no_double(){
		print( 'Method bar called'. PHP_EOL);
		$foo *= 2;
		return ;
	}
	public function double(){
		print( 'Method bar called'. PHP_EOL);
		$this->foo *= 2;
		return ;
	}
	public function __get($lol) {
		print('forbidden get!!! '.$this->lol. PHP_EOL);
		return;
	}
	public function __set($lol, $foo) {
		print('forbidden set!!! '.$this->foo.'   '.$this->lol. PHP_EOL);
		return;
	}
	public function __destruct(){
		print( 'Destructor called'. PHP_EOL);
		return;
	}
}
 $instance = new Exemple();
 $instance2 = new Exemple();
 print('$foo = '.$instance->foo. PHP_EOL);
 $instance->no_double();
 print('$foo = '.$instance->foo. PHP_EOL);
 print('$foo = '.$instance2->foo. PHP_EOL);
 $instance2->double();
 print('$foo = '.$instance2->foo. PHP_EOL);
 $instance3 = new Exemple();
 print('$foo = '.$instance3->foo. PHP_EOL);
$foo = $lol;
 sleep(2);
?>
