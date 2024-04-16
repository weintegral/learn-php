<?php

trait DefaultSymbolTrait
{
    public function setDefaultCurrencySymbol(): string
    {
        echo "$$";
        return "$";
    }
}