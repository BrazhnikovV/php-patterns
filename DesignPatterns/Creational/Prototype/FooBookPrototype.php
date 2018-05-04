<?php

namespace DesignPatterns\Creational\Prototype;

require_once('DesignPatterns/Creational/Prototype/BookPrototype.php');

class FooBookPrototype extends BookPrototype
{
   /**
    * @var string
    */
    protected $category = 'Foo';

    public function __clone()
    {

    }
}