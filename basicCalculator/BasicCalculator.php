<?php
/**
 *
 */

class BasicCalculator
{
    private $operand1;
    private $operand2;

    public function __construct($operand1, $operand2)
    {
        $this->operand1 = $operand1;
        $this->operand2 = $operand2;
    }

    public function getSumm(int $operand1, int $operand2) :int
    {
        return $operand1 + $operand2;
    }

    public function getDevision(int $operand1, int $operand2)
    {
        return $operand1 / $operand2;
    }

    public function getMultiplication(int $operand1, int $operand2)
    {
        return $operand1 * $operand2;
    }

    public function getSubtraction(int $operand1, int $operand2)
    {
        return $operand1 - $operand2;
    }

}