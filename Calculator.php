<?php

class Calculator
{
    /* 
        * Retorna la suma de dos números enteros
        * @param int $a
        * @param int $b
        */
    public function add($a, $b)
    {
        return $a + $b;
    }
    /* 
        * Retorna la resta de dos números enteros
        * @param int $a
        * @param int $b
        */
    public function sub($a, $b)
    {
        return $a - $b;
    }
    /* 
        * Retorna la multiplicación de dos números enteros
        * @param int $a
        * @param int $b
        */
    public function mult($a, $b)
    {
        return $a * $b;
    }
    /* 
        * Retorna la división de dos números enteros
        * @param int $a
        * @param int $b
        */
    public function div($a, $b)
    {
        return $a / $b;
    }
}
