<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase{
    public function testAddWillReturnTheSumOfItsParameters(){
        $sut = new Calculator();

        /* 
        * Retorna la suma de dos números enteros
        * @param int $a
        * @param int $b
        */
        $this->assertEquals(8, $sut->add(5, 3));

        /* 
        * Retorna la resta de dos números enteros
        * @param int $a
        * @param int $b
        */
        $this->assertEquals(10, $sut->sub(15, 5));

        /* 
        * Retorna la división de dos números enteros
        * @param int $a
        * @param int $b
        */
        $this->assertEquals(25, $sut->mult(5, 5));

        /* 
        * Retorna la multiplicación de dos números enteros
        * @param int $a
        * @param int $b
        */
        $this->assertEquals(10, $sut->div(100, 10));
    }
}