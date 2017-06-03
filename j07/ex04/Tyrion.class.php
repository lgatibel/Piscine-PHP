<?php
class Tyrion extends Lannister{
	public function sleepWith($obj){
	   if ($obj instanceof Lannister){
		   parent::sleepWith($obj);
	   }
	   else{
		   print('Let\'s do this.'.PHP_EOL);
	   }
	   return;
   }
}
?>
