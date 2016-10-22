<?php

use Fruit\Apple;
use PHPUnit\Framework\TestCase;

class AppleTest extends TestCase
{
    public function testInterfaceAssertion()
    {
        $apple = new Apple();
        $this->assertInstanceOf('Fruit\FruitInterface', $apple);
    }

    public function testCanSetType()
    {
        $type = 'Granny Smith';
        $apple = new Apple($type);
        $this->assertEquals($type, $apple->getType());
    }

    public function testGetTypeReturnsStringType()
    {
        $apple = new Apple('Granny Smith');
        $this->assertEquals('string', gettype($apple->getType()));
    }

    /**
     * @expectedException \Fruit\Exception\InvalidFruitTypeExceptiopn
     */
    public function testExceptionThrownOnInvalidAppleType()
    {
        $apple = new Apple('Sugur Apple');
    }
}
