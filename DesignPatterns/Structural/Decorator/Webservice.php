<?php

namespace DesignPatterns\Structural\Decorator;

require_once('DesignPatterns/Structural/Decorator/RenderableInterface.php');

class Webservice implements RenderableInterface
{
    /**
     * @var string
     */
    private $data;

    public function __construct( string $data )
    {
        $this->data = $data;
    }

    public function renderData()
    {
        return $this->data;
    }
}