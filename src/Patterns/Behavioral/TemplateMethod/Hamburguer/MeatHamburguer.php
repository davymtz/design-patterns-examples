<?php
/**
 * Created by PhpStorm.
 * User: juancarlosjosecamacho
 * Date: 1/29/18
 * Time: 16:39
 */

namespace MonkeyCoders\Patterns\Behavioral\TemplateMethod\Hamburguer;


class MeatHamburguer extends HamburguerAbstract
{

    protected function mainTopic()
    {
        var_dump('put meat');
        return $this;
    }
}