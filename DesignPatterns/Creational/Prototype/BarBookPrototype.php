<?php

namespace DesignPatterns\Creational\Prototype;

require_once('DesignPatterns/Creational/Prototype/BookPrototype.php');

class BarBookPrototype extends BookPrototype
{
   /**
    * @var string
    */
    protected $category = 'Bar';

    public function __clone()
    {

    }
}