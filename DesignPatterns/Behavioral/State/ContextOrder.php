<?php

namespace DesignPatterns\Behavioral\State;

require_once('DesignPatterns/Behavioral/State/StateOrder.php');

class ContextOrder extends StateOrder
{
    public function getState()
    {
        return static::$state;
    }

    public function setState( StateOrder $state )
    {
        static::$state = $state;
    }

    public function done()
    {
        static::$state->done();
    }

    public function getStatus()
    {
        return static::$state->getStatus();
    }
}        