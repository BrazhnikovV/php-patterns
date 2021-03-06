<?php

namespace DesignPatterns\Behavioral\Mediator\Subsystem;

use DesignPatterns\Behavioral\Mediator\Colleague;

require_once('DesignPatterns/Behavioral/Mediator/Colleague.php');

class Server extends Colleague
{
    public function process()
    {
        $data = $this->mediator->queryDb();
        $this->mediator->sendResponse( sprintf( "Hello %s", $data ) );
    }
}