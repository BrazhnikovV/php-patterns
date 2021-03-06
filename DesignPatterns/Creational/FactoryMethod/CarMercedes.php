<?php

namespace DesignPatterns\Creational\FactoryMethod;

require_once('DesignPatterns/Creational/FactoryMethod/IVehicleInterface.php');

class CarMercedes implements IVehicleInterface
{
   /**
    * @var string
    */
    private $color;

    public function setColor( string $rgb )
    {
        $this->color = $rgb;
    }

    public function addAMGTuning()
    {
        // do additional tuning here
    }
}