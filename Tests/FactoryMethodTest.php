<?php

namespace Tests;

require_once('DesignPatterns/Creational/FactoryMethod/GermanFactory.php');  
require_once('DesignPatterns/Creational/FactoryMethod/Bicycle.php');  
require_once('DesignPatterns/Creational/FactoryMethod/CarMercedes.php');  
require_once('DesignPatterns/Creational/FactoryMethod/ItalianFactory.php');  
require_once('DesignPatterns/Creational/FactoryMethod/CarFerrari.php'); 

use DesignPatterns\Creational\FactoryMethod\Bicycle;
use DesignPatterns\Creational\FactoryMethod\CarFerrari;
use DesignPatterns\Creational\FactoryMethod\CarMercedes;
use DesignPatterns\Creational\FactoryMethod\FactoryMethod;
use DesignPatterns\Creational\FactoryMethod\GermanFactory;
use DesignPatterns\Creational\FactoryMethod\ItalianFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateCheapVehicleInGermany()
    {
        print __METHOD__ . "\n";
        $factory = new GermanFactory();
        $result = $factory->create( FactoryMethod::CHEAP );

        $this->assertInstanceOf( Bicycle::class, $result );
    }    

    public function testCanCreateFastVehicleInGermany()
    {
        print __METHOD__ . "\n";
        $factory = new GermanFactory();
        $result = $factory->create( FactoryMethod::FAST );

        $this->assertInstanceOf( CarMercedes::class, $result );
    }

    public function testCanCreateCheapVehicleInItaly()
    {
        print __METHOD__ . "\n";
        $factory = new ItalianFactory();
        $result = $factory->create( FactoryMethod::CHEAP );

        $this->assertInstanceOf( Bicycle::class, $result );
    }

    public function testCanCreateFastVehicleInItaly()
    {
        print __METHOD__ . "\n";
        $factory = new ItalianFactory();
        $result = $factory->create( FactoryMethod::FAST );

        $this->assertInstanceOf( CarFerrari::class, $result );
    }
}