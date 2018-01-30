<?php
namespace MonkeyCoders\Patterns\Behavioral\Observer\SignUp;
/**
 * Created by PhpStorm.
 * User: juancarlosjosecamacho
 * Date: 1/30/18
 * Time: 11:25
 */
interface SubjectInterface
{
    public function attach($observable);
    public function detach($index);
    public function notify();
}