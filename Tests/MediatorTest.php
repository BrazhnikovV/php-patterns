<?php

namespace DesignPatterns\Tests\Mediator\Tests;

use DesignPatterns\Behavioral\Mediator\Mediator;
use DesignPatterns\Behavioral\Mediator\Subsystem\Client;
use DesignPatterns\Behavioral\Mediator\Subsystem\Database;
use DesignPatterns\Behavioral\Mediator\Subsystem\Server;
use PHPUnit\Framework\TestCase;

require_once('DesignPatterns/Behavioral/Mediator/Mediator.php');
require_once('DesignPatterns/Behavioral/Mediator/Client.php');
require_once('DesignPatterns/Behavioral/Mediator/Database.php');
require_once('DesignPatterns/Behavioral/Mediator/Server.php');


class MediatorTest extends TestCase
{
    public function testOutputHelloWorld()
    {
        $client = new Client();
        new Mediator( new Database(), $client, new Server() );

        $this->expectOutputString( 'Hello World' );
        $client->request();
    }
}