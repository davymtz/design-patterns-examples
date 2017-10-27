<?php
namespace MonkeyCoders\Patterns\Structural\Decorator\FastFood;
class Hamburger implements IFastFood{
    public function serve(){
        return 'Serve Hamburger';
    }
}