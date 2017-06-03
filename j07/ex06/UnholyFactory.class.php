<?php
class UnholyFactory{
	public static $foot = 0;
	public function absorb($soldier){
		Fighter::$silence = 1;
		if ($soldier instanceof Archer){
			print('(Factory absorbed a fighter of type archer)'.PHP_EOL);
		}
		else if ($soldier instanceof Footsoldier){
			if (self::$foot == 0){
				print('(Factory absorbed a fighter of type foot soldier)'.PHP_EOL);
				self::$foot++;
			}
			else{
				print('(Factory already absorbed a fighter of type foot soldier)'.PHP_EOL);
			}
		}
		else if ($soldier instanceof Assassin){
			print('(Factory absorbed a fighter of type assassin)'.PHP_EOL);
		}
		else{
			print('(Factory can\'t absorb this, it\'s not a fighter)'.PHP_EOL);
		}
		return;
	}
	public function fabricate($rf){
		Fighter::$silence = 0;
		if ($rf == 'foot soldier'){
			return new Footsoldier();
		}
		else if ($rf == 'archer'){
			return new Archer();
		}
		else if ($rf == 'assassin'){
			return new Assassin();
		}
		print('(Factory hasn\'t absorbed any fighter of type '.$rf.')'.PHP_EOL);
		return;
	}
}
?>
