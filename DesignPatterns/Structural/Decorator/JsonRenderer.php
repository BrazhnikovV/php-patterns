<?php

namespace DesignPatterns\Structural\Decorator;

require_once('DesignPatterns/Structural/Decorator/RendererDecorator.php');

class JsonRenderer extends RendererDecorator
{
    public function renderData()
    {
        return json_encode( $this->wrapped->renderData() );
    }
}