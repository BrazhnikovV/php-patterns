<?php

namespace DesignPatterns\Creational\AbstractFactory\Tests;

use DesignPatterns\Creational\AbstractFactory\HtmlFactory;
use DesignPatterns\Creational\AbstractFactory\HtmlText;
use DesignPatterns\Creational\AbstractFactory\JsonFactory;
use DesignPatterns\Creational\AbstractFactory\JsonText;

require_once('DesignPatterns/Creational/AbstractFactory/HtmlFactory.php');
require_once('DesignPatterns/Creational/AbstractFactory/HtmlText.php');
require_once('DesignPatterns/Creational/AbstractFactory/JsonFactory.php');
require_once('DesignPatterns/Creational/AbstractFactory/JsonText.php');


use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateHtmlText()
    {
        print __METHOD__ . "\n";
        $factory = new HtmlFactory();
        $text = $factory->createText( 'foobar' );
        $this->assertInstanceOf( HtmlText::class, $text );
    }

    public function testCanCreateJsonText()
    {
        print __METHOD__ . "\n";
        $factory = new JsonFactory();
        $text = $factory->createText( 'foobar' );
        $this->assertInstanceOf( JsonText::class, $text );
    }
}