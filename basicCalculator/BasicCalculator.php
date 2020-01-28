<?php

namespace basicCalculator;

class BasicCalculator
{
    private float $operand1;
    private float $operand2;

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

    public function getDevision(): ?float
    {
        if ($this->operand1 == 0) {
            return null;
        } else {
            return $this->operand1 / $this->operand2;
        }

    }

    public function getMultiplication(): float
    {
        return $this->operand1 * $this->operand2;
    }

    public function getSubtraction(): float
    {
        return $this->operand1 - $this->operand2;
    }

    public function  displayResult():void
    {
        echo $this->operand1 . ' + ' . $this->operand2 . ' = ' . $this->getSumm() . '<br>';
        echo $this->operand1 . ' - ' . $this->operand2 . ' = ' . $this->getSubtraction() . '<br>';
        echo $this->operand1 . ' / ' . $this->operand2 . ' = ' . $this->getDevision() . '<br>';
        echo $this->operand1 . ' * ' . $this->operand2 . ' = ' . $this->getMultiplication() . '<br>';
    }
}