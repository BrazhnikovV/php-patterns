<?php

namespace DesignPatterns\Creational\FactoryMethod;

abstract class FactoryMethod
{
    const CHEAP = 'cheap';
    const FAST = 'fast';

    abstract protected function createVehicle( string $type );

    public function create( string $type )
    {
        $obj = $this->createVehicle( $type );
        $obj->setColor('black');

        return $obj;
    }
}