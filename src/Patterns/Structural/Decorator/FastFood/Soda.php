<?php
namespace MonkeyCoders\Patterns\Structural\Decorator\FastFood;
class Soda extends FastFoodDecorator {
    public function serve(){
        $result = $this->fastFood->serve();
        return "$result with soda";
    }
}