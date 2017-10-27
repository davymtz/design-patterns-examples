<?php
interface IFastFood {
	public function serve();
}

class Hamburger implements IFastFood{
	public function serve(){
		return 'Serve Hamburger';
	}
}

class Hotdog implements IFastFood{
	public function serve(){
		return 'Serve Hotdog';
	}
}

abstract class FastFoodDecorator implements IFastFood {
	protected $fastFood;
	public function __construct(IFastFood $fastFood){
		$this->fastFood = $fastFood;
	}
	abstract function serve();
}

class FrenchFries extends FastFoodDecorator {
	public function serve(){
		$result = $this->fastFood->serve();
		return "$result with potatoes";
	}
}

class Soda extends FastFoodDecorator {
    public function serve(){
        $result = $this->fastFood->serve();
        return "$result with soda";
    }
}

class Dessert extends FastFoodDecorator {
    public function serve(){
        $result = $this->fastFood->serve();
        return "$result with dessert";
    }
}

$item = new Hotdog();
$item = new FrenchFries(new Dessert(new Soda($item)));
echo $item->serve()."\n";

?>