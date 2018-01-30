<?php
namespace MonkeyCoders\Patterns\Behavioral\ChainOfResponsibility\HamburguerRecipe;
/**
 * Created by PhpStorm.
 * User: juancarlosjosecamacho
 * Date: 1/29/18
 * Time: 22:09
 */
class Meat extends HamburguerChecker
{
    public function check(HamburguerStatus $status)
    {
        if(! $status->withMeat ){
            throw new \Exception('No Meat!');
        }
        var_dump('meat');
        $this->next($status);
    }
}