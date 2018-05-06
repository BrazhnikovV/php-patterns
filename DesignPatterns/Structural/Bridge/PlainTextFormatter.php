<?php

namespace DesignPatterns\Structural\Bridge;

require_once('DesignPatterns/Structural/Bridge/FormatterInterface.php');

class PlainTextFormatter implements FormatterInterface
{
    public function format( string $text )
    {
        return $text;
    }
}