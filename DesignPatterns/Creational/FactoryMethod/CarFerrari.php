<?php

namespace DesignPatterns\Creational\FactoryMethod;

require_once('DesignPatterns/Creational/FactoryMethod/IVehicleInterface.php');

class CarFerrari implements IVehicleInterface
{
   /**
    * @var string
    */
    private $color;

    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }
}