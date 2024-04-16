<?php
require_once 'Calculator.php';

class FinanceCalculator
{
    public static function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public static function calculateCompoundInterest(float $principal, float $rate, int $time): float
    {
        return $principal * (pow((1 + $rate / 100), $time) - 1);
    }

    public static function calculateSimpleInterest(float $principal, float $rate, int $time): float
    {
        return $principal * $rate * $time / 100;
    }
}