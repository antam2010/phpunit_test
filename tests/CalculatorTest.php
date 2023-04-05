<?php

use PHPUnit\Framework\TestCase;

require_once 'class/Calculator.php';

class CalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAdd_int()
    {
        $result = $this->calculator->add(5, 3);
        $this->assertEquals(8, $result);
    }
    public function testAdd_string()
    {
        $result = $this->calculator->add("5", "3");
        $this->assertEquals("8", $result);
    }

    public function testSubtract()
    {
        $result = $this->calculator->subtract(5, 3);
        $this->assertEquals(2, $result);
    }

    protected function tearDown(): void
    {
        $this->calculator = null;
    }
}
