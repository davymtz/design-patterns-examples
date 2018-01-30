<?php
namespace MonkeyCoders\Patterns\Behavioral\ChainOfResponsibility\HamburguerRecipe;
/**
 * Created by PhpStorm.
 * User: juancarlosjosecamacho
 * Date: 1/29/18
 * Time: 22:09
 */
class Cheese extends HamburguerChecker
{
    public function check(HamburguerStatus $status)
    {
        if(! $status->withCheese ){
            throw new \Exception('No Cheese!');
        }
        var_dump('cheese');
        $this->next($status);
    }
}