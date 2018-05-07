<?php

namespace DesignPatterns\Structural\Composite;

require_once('DesignPatterns/Structural/Composite/RenderableInterface.php');

class TextElement implements RenderableInterface
{
    /**
     * @var string
     */
    private $text;

    public function __construct( string $text )
    {
        $this->text = $text;
    }

    public function render()
    {
        return $this->text;
    }
}