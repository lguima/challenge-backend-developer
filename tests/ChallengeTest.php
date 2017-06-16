<?php

use PHPUnit\Framework\TestCase;
use Linio\Challenge;
use Linio\Replacement;

class ChallengeTest extends TestCase
{
    private $challenge;
    private $replacements;

    public function setUp()
    {
        $this->challenge = new Challenge();
        $this->replacements = [new Replacement\Linianos(), new Replacement\Linio, new Replacement\IT];
    }

    public function testMustReturnNumber()
    {
        $this->assertEquals(4, $this->challenge->replace(4, $this->replacements));
        $this->assertEquals(23, $this->challenge->replace(23, $this->replacements));
        $this->assertEquals(47, $this->challenge->replace(47, $this->replacements));
    }

    public function testMustReturnLinio()
    {
        $this->assertEquals('Linio', $this->challenge->replace(12, $this->replacements));
        $this->assertEquals('Linio', $this->challenge->replace(36, $this->replacements));
        $this->assertEquals('Linio', $this->challenge->replace(54, $this->replacements));
    }

    public function testMustReturnIT()
    {
        $this->assertEquals('IT', $this->challenge->replace(40, $this->replacements));
        $this->assertEquals('IT', $this->challenge->replace(65, $this->replacements));
        $this->assertEquals('IT', $this->challenge->replace(85, $this->replacements));
    }

    public function testMustReturnLinianos()
    {
        $this->assertEquals('Linianos', $this->challenge->replace(45, $this->replacements));
        $this->assertEquals('Linianos', $this->challenge->replace(75, $this->replacements));
        $this->assertEquals('Linianos', $this->challenge->replace(90, $this->replacements));
    }
}
