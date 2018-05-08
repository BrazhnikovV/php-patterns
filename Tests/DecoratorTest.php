<?php

namespace Tests;

use DesignPatterns\Structural\Decorator;
use PHPUnit\Framework\TestCase;

require_once('DesignPatterns/Structural/Decorator/Webservice.php');

class DecoratorTest extends TestCase
{
    /**
     * @var Decorator\Webservice
     */
    private $service;

    protected function setUp()
    {
        $this->service = new Decorator\Webservice( 'foobar' );
    }
}