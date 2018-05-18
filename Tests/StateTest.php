<?php

namespace DesignPatterns\Behavioral\State\Tests;

use DesignPatterns\Behavioral\State\ContextOrder;
use DesignPatterns\Behavioral\State\CreateOrder;
use PHPUnit\Framework\TestCase;

require_once('DesignPatterns/Behavioral/State/ContextOrder.php');
require_once('DesignPatterns/Behavioral/State/CreateOrder.php');

class StateTest extends TestCase
{
    public function testCanShipCreatedOrder()
    {
        $order = new CreateOrder();
        $contextOrder = new ContextOrder();
        $contextOrder->setState( $order );
        $contextOrder->done();

        $this->assertEquals( 'shipping', $contextOrder->getStatus() );
    }    

    public function testCanCompleteShippedOrder()
    {
        $order = new CreateOrder();
        $contextOrder = new ContextOrder();
        $contextOrder->setState( $order );
        $contextOrder->done();
        $contextOrder->done();

        $this->assertEquals( 'completed', $contextOrder->getStatus() );
    }
}