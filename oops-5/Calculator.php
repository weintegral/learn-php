<?php

final class Calculator
{
    public static function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public static function subtract(int $a, int $b): int
    {
        return $a - $b;
    }

    public static function multiply(int $a, int $b): int
    {
        return $a * $b;
    }

    public static function divide(int $a, int $b): float
    {
        return $a / $b;
    }
}