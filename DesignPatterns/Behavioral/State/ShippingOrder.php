<?php

namespace DesignPatterns\Behavioral\State;

require_once('DesignPatterns/Behavioral/State/StateOrder.php');

class ShippingOrder extends StateOrder
{
    public function __construct()
    {
        $this->setStatus( 'shipping' );
    }

    protected function done()
    {
        $this->setStatus( 'completed' );
    }
}