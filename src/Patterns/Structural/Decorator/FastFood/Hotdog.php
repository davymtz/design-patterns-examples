<?php
namespace MonkeyCoders\Patterns\Structural\Decorator\FastFood;
class Hotdog implements IFastFood{
    public function serve(){
        return 'Serve Hotdog';
    }
}