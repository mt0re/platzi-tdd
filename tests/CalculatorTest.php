<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAddWillReturnTheSumOfItsParameters()
    {
        $sut = new Calculator();


        $this->assertEquals(8, $sut->add(5, 3));
        $this->assertEquals(10, $sut->sub(15, 5));
        $this->assertEquals(25, $sut->mult(5, 5));
        $this->assertEquals(10, $sut->div(100, 10));
    }
}
