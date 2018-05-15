<?php

namespace DesignPatterns\Behavioral\Mediator\Subsystem;

use DesignPatterns\Behavioral\Mediator\Colleague;

require_once('DesignPatterns/Behavioral/Mediator/Colleague.php');

class Database extends Colleague
{
    public function getData()
    {
        return 'World';
    }
}