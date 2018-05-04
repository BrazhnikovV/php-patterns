<?php

namespace DesignPatterns\Creational\AbstractFactory;

require_once('DesignPatterns/Creational/AbstractFactory/AbstractFactory.php');

class JsonFactory extends AbstractFactory
{
    public function createText(string $content)
    {
        return new JsonText($content);
    }
}