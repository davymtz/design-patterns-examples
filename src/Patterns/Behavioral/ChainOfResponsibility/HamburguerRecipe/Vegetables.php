<?php
namespace MonkeyCoders\Patterns\Behavioral\ChainOfResponsibility\HamburguerRecipe;
/**
 * Created by PhpStorm.
 * User: juancarlosjosecamacho
 * Date: 1/29/18
 * Time: 22:09
 */
class Vegetables extends HamburguerChecker
{
    public function check(HamburguerStatus $status)
    {
        if(! $status->withVegetables ){
            throw new \Exception('No vegetables!');
        }
        var_dump('vegetables');
        $this->next($status);
    }
}