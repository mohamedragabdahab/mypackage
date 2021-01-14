<?php

namespace MyPackage\Controller;

class Calculator
{
    public function multiply(float $number1, float $number2)
    {
        echo $number1 * $number2;
    }

    public function add(float $number1, float $number2)
    {
        echo $number1 + $number2;
    }
}
