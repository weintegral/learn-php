<?php


class Calc
{

    public function __invoke(int $a, int $b): int
    {
        return $a * $b;
    }
}