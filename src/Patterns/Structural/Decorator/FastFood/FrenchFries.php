<?php
namespace MonkeyCoders\Patterns\Structural\Decorator\FastFood;
class FrenchFries extends FastFoodDecorator {
    public function serve(){
        $result = $this->fastFood->serve();
        return "$result with potatoes";
    }
}