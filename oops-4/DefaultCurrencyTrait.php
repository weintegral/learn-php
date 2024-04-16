<?php

trait DefaultCurrencyTrait
{
    public function setDefaultCurrency(): string
    {
        echo "USD";
        return "USD";
    }

    public function setDefaultCurrencySymbol(): string
    {
        echo "$";
        return "$";
    }
}