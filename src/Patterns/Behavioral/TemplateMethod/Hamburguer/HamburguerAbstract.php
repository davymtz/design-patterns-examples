<?php
namespace MonkeyCoders\Patterns\Behavioral\TemplateMethod\Hamburguer;
/**
 * Created by PhpStorm.
 * User: juancarlosjosecamacho
 * Date: 1/29/18
 * Time: 16:35
 */
abstract class HamburguerAbstract
{
    public function make(){
        $this->bread()
            ->ketchup()
            ->mayonnaise()
            ->lettuce()
            ->mainTopic()
            ->bread();
    }
    protected function bread(){
        var_dump('put bread');
        return $this;
    }
    protected function lettuce(){
        var_dump('put lettuce');
        return $this;
    }
    protected function mayonnaise(){
        var_dump('put mayonnaise');
        return $this;
    }
    protected function ketchup(){
        var_dump('put ketchup');
        return $this;
    }
    abstract protected function mainTopic();


}