<?php

namespace lysenkolipa\calcLiba\basicCalculator;

class BasicCalculator
{
    private $operand1;
    private $operand2;

    /**
     * @param float $operand1
     * @param float $operand2
     */
    public function __construct(float $operand1, float $operand2)
    {
        $this->operand1 = $operand1;
        $this->operand2 = $operand2;
    }

    public function getSumm(): float
    {
        return $this->operand1 + $this->operand2;
    }

    /**
     * Method get division from 2 operands
     * @return float
     */
    public function getDivision(): float
    {
        return  $this->operand1 / $this->operand2;
    }

    /**
     * Method get multiplication from 2 operands
     * @return float
     */
    public function getMultiplication(): float
    {
        return $this->operand1 * $this->operand2;
    }

    /**
     * Method get substraction from 2 operands
     * @return float
     */
    public function getSubtraction(): float
    {
        return $this->operand1 - $this->operand2;
    }

    /**
     * Method displayed result of math functions
     * @return void
     */
    public function  displayResult():void
    {
        echo $this->operand1 . ' + ' . $this->operand2 . ' = ' . $this->getSumm() . '<br>';
        echo $this->operand1 . ' - ' . $this->operand2 . ' = ' . $this->getSubtraction() . '<br>';
        echo $this->operand1 . ' * ' . $this->operand2 . ' = ' . $this->getMultiplication() . '<br>';
    }
}
