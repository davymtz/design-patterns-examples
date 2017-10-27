<?php
namespace MonkeyCoders\Patterns\Structural\Decorator\FastFood;
class Dessert extends FastFoodDecorator {
    public function serve(){
        $result = $this->fastFood->serve();
        return "$result with dessert";
    }
}