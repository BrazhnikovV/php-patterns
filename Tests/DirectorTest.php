<?php

namespace DesignPatterns\Creational\Builder\Tests;

use DesignPatterns\Creational\Builder\Parts\Car;
use DesignPatterns\Creational\Builder\Parts\Truck;
use DesignPatterns\Creational\Builder\TruckBuilder;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;
use PHPUnit\Framework\TestCase;

require_once('DesignPatterns/Creational/Builder/Parts/Car.php');
require_once('DesignPatterns/Creational/Builder/Parts/Truck.php');
require_once('DesignPatterns/Creational/Builder/Parts/Door.php');
require_once('DesignPatterns/Creational/Builder/Parts/Engine.php');
require_once('DesignPatterns/Creational/Builder/Parts/Wheel.php');
require_once('DesignPatterns/Creational/Builder/TruckBuilder.php');
require_once('DesignPatterns/Creational/Builder/CarBuilder.php');
require_once('DesignPatterns/Creational/Builder/Director.php');

class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = ( new Director() )->build( $truckBuilder );
        $this->assertInstanceOf( Truck::class, $newVehicle );
    }    

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = ( new Director() )->build( $carBuilder );
        $this->assertInstanceOf( Car::class, $newVehicle );
    }
}