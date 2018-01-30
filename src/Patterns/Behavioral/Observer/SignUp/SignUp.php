<?php
namespace MonkeyCoders\Patterns\Behavioral\Observer\SignUp;
/**
 * Created by PhpStorm.
 * User: juancarlosjosecamacho
 * Date: 1/30/18
 * Time: 11:26
 */
class SignUp implements SubjectInterface
{
    protected $observers = [];
    public function attach($observable)
    {
        if(is_array($observable)){
            foreach ($observable as $item){
                if(! $item instanceof ObserverInterface)
                    throw new \Exception('Is not a instance of observer');
                $this->attach($item);
            }
            return;
        }
        $this->observers[] = $observable;
        return $this;
    }

    public function detach($index)
    {
        unset($this->observers[$index]);
    }

    public function notify()
    {
        foreach ($this->observers as $observer){
            $observer->handle();
        }
    }
}