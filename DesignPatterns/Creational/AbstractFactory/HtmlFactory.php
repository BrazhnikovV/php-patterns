<?php

namespace DesignPatterns\Creational\AbstractFactory;

require_once('DesignPatterns/Creational/AbstractFactory/AbstractFactory.php');

class HtmlFactory extends AbstractFactory
{
    public function createText( string $content )
    {
        return new HtmlText( $content );
    }
}