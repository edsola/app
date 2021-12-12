<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class HelloWorldTest extends TestCase
{
    public function testHelloFunctionReturnsHelloWorldString()
    {
        $this->assertEquals("Hello World!", hello());
    }
}