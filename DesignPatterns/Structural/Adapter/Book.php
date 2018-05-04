<?php

namespace DesignPatterns\Structural\Adapter;

require_once('DesignPatterns/Structural/Adapter/BookInterface.php');

class Book implements BookInterface
{
   /**
    * @var int
    */
    private $page;

    public function open()
    {
        $this->page = 1;
    }

    public function turnPage()
    {
        $this->page++;
    }

    public function getPage()
    {
        return $this->page;
    }
}