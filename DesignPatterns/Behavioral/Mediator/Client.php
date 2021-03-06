<?php

namespace DesignPatterns\Behavioral\Mediator\Subsystem;

use DesignPatterns\Behavioral\Mediator\Colleague;

require_once('DesignPatterns/Behavioral/Mediator/Colleague.php');

/**
 * Client is a client that makes requests and gets the response.
 */
class Client extends Colleague
{
    public function request()
    {
        $this->mediator->makeRequest();
    }

    public function output( string $content )
    {
        echo $content;
    }
}