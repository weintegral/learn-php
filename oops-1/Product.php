<?php


class Product
{
    public function __construct(
        public string $name = '', 
        public int $price = 0, 
        public int $quantity = 0
        )
    {}

    // public function __destruct()
    // {
    //     echo "The product {$this->name} has been removed from the memory";
    // }

    /**
     * __call
     * __callStatic
     * __get
     * __set
     * __isset
     * __unset
     * __sleep
     * __wakeup
     * __serialize
     * __unserialize
     * __toString
     * __invoke
     * __set_state
     * __clone
     * __debugInfo
     */

    public function priceAsCurrency(string $currencySymbol, int $divisor): string
    {
        $priceAsCurrency = $this->price / $divisor;

        return $currencySymbol . $priceAsCurrency;
    }
}