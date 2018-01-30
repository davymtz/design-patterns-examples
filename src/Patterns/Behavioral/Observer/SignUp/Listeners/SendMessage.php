<?php
namespace MonkeyCoders\Patterns\Behavioral\Observer\SignUp\Listeners;
use MonkeyCoders\Patterns\Behavioral\Observer\SignUp\ObserverInterface;

/**
 * Created by PhpStorm.
 * User: juancarlosjosecamacho
 * Date: 1/30/18
 * Time: 11:29
 */
class SendMessage implements ObserverInterface
{
    public function handle()
    {
        var_dump('send a message');
    }
}