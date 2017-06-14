<?php

use PHPUnit\Framework\TestCase;
use Linio\Challenge;

class ChallengeTest extends TestCase
{
    private $challenge;

    public function setUp()
    {
        $this->challenge = new Challenge();
    }

    public function testMustReturnNumber()
    {
        $this->assertEquals(4, $this->challenge->replace(4));
        $this->assertEquals(23, $this->challenge->replace(23));
        $this->assertEquals(47, $this->challenge->replace(47));
    }

    public function testMustReturnLinio()
    {
        $this->assertEquals('Linio', $this->challenge->replace(12));
        $this->assertEquals('Linio', $this->challenge->replace(36));
        $this->assertEquals('Linio', $this->challenge->replace(54));
    }

    public function testMustReturnIT()
    {
        $this->assertEquals('IT', $this->challenge->replace(40));
        $this->assertEquals('IT', $this->challenge->replace(65));
        $this->assertEquals('IT', $this->challenge->replace(85));
    }

    public function testMustReturnLinianos()
    {
        $this->assertEquals('Linianos', $this->challenge->replace(45));
        $this->assertEquals('Linianos', $this->challenge->replace(75));
        $this->assertEquals('Linianos', $this->challenge->replace(90));
    }
}
