<?php
namespace MonkeyCoders\Patterns\Behavioral\ChainOfResponsibility\HamburguerRecipe;
/**
 * Created by PhpStorm.
 * User: juancarlosjosecamacho
 * Date: 1/29/18
 * Time: 22:08
 */
class Bread extends HamburguerChecker
{
    public function check(HamburguerStatus $status)
    {

        if(! $status->withBread ){
            throw new \Exception('No bread!');
        }
        var_dump('bread');
        $this->next($status);
    }
}