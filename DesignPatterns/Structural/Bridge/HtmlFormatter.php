<?php

namespace DesignPatterns\Structural\Bridge;

require_once('DesignPatterns/Structural/Bridge/FormatterInterface.php');

class HtmlFormatter implements FormatterInterface
{
    public function format( string $text )
    {
        return sprintf( '<p>%s</p>', $text );
    }
}    