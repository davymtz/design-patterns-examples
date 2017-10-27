<?php
namespace MonkeyCoders\Patterns\Structural\Decorator\FastFood;
abstract class FastFoodDecorator implements IFastFood {
    protected $fastFood;
    public function __construct(IFastFood $fastFood){
        $this->fastFood = $fastFood;
    }
    abstract function serve();
}