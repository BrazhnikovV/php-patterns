<?php


namespace DesignPatterns\Structural\Decorator;

require_once('DesignPatterns/Structural/Decorator/RendererDecorator.php');

class XmlRenderer extends RendererDecorator
{
    public function renderData()
    {
        $doc = new \DOMDocument();
        $data = $this->wrapped->renderData();
        $doc->appendChild( $doc->createElement( 'content', $data ) );
        return $doc->saveXML();
    }
}