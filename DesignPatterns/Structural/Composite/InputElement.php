<?php

namespace DesignPatterns\Structural\Composite;

require_once('DesignPatterns/Structural/Composite/RenderableInterface.php');

class InputElement implements RenderableInterface
{
    public function render()
    {
        return '<input type="text" />';
    }
}