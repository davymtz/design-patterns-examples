<?php
namespace MonkeyCoders\Patterns\Behavioral\ChainOfResponsibility\HamburguerRecipe;
/**
 * Created by PhpStorm.
 * User: juancarlosjosecamacho
 * Date: 1/29/18
 * Time: 22:07
 */
abstract class HamburguerChecker
{
    protected $succesor;
    public abstract function check(HamburguerStatus $status);

    public function succeedWith(HamburguerChecker $succesor){
        $this->succesor = $succesor;
    }

    public function next(HamburguerStatus $status){
        if($this->succesor){
            $this->succesor->check($status);
        }
    }
}