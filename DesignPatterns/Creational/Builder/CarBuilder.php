<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;
require_once('DesignPatterns/Creational/Builder/BuilderInterface.php');

class CarBuilder implements BuilderInterface
{
   /**
    * @var Parts\Car
    */
    private $car;

    public function addDoors()
    {
        $this->car->setPart( 'rightDoor', new Parts\Door() );
        $this->car->setPart( 'leftDoor', new Parts\Door() );
        $this->car->setPart( 'trunkLid', new Parts\Door() );
    }

    public function addEngine()
    {
        $this->car->setPart( 'engine', new Parts\Engine() );
    }

    public function addWheel()
    {
        $this->car->setPart( 'wheelLF', new Parts\Wheel() );
        $this->car->setPart( 'wheelRF', new Parts\Wheel() );
        $this->car->setPart( 'wheelLR', new Parts\Wheel() );
        $this->car->setPart( 'wheelRR', new Parts\Wheel() );
    }

    public function createVehicle()
    {
        $this->car = new Parts\Car();
    }

    public function getVehicle()
    {
        return $this->car;
    }
}