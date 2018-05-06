<?php

namespace DesignPatterns\Structural\Bridge;

require_once('DesignPatterns/Structural/Bridge/Service.php');

class HelloWorldService extends Service
{
    public function get()
    {
        return $this->implementation->format( 'Hello World' );
    }
}