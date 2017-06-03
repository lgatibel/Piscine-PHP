<?php
class Fighter{
	public static $silence = 1;
	public function __construct($rf){
		$this->isFighter();
		if (Fighter::$silence == 0){
			print('(Factory fabricate a fighter of type '.$rf.')'.PHP_EOL);
		}
		return;
	}
	public function isFighter(){
		if($this instanceof CrippledSoldier){
			$this->void();
		}
		return True;
	}
}
?>
