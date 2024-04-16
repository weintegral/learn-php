<?php
require_once 'Calculator.php';

class PercentageCalculator extends Calculator
{
    public static function calculatePercentage(float $total, float $number): float
    {
        return ($number / $total) * 100;
    }
}