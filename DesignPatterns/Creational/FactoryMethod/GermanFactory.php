<?php

namespace DesignPatterns\Creational\FactoryMethod;

require_once('DesignPatterns/Creational/FactoryMethod/FactoryMethod.php');

class GermanFactory extends FactoryMethod
{

    protected function createVehicle( string $type )
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
            case parent::FAST:
                $carMercedes = new CarMercedes();
                // we can specialize the way we want some concrete Vehicle since we know the class
                $carMercedes->addAMGTuning();
                return $carMercedes;
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}