<?php

namespace DesignPatterns\Structural\Adapter\Tests;

use DesignPatterns\Structural\Adapter\Book;
use DesignPatterns\Structural\Adapter\EBookAdapter;
use DesignPatterns\Structural\Adapter\Kindle;
use PHPUnit\Framework\TestCase;

require_once('DesignPatterns/Structural/Adapter/Book.php');
require_once('DesignPatterns/Structural/Adapter/EBookAdapter.php');
require_once('DesignPatterns/Structural/Adapter/Kindle.php');

class AdapterTest extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new Book();
        $book->open();
        $book->turnPage();

        $this->assertEquals( 2, $book->getPage() );
    }    

    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter( $kindle );

        $book->open();
        $book->turnPage();

        $this->assertEquals( 2, $book->getPage() );
    }
}