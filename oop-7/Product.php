<?php


class Product
{
    public function __construct(
        public string $manufacturer, 
        public string $itemName
    )
    {}

    public function __get(string $propertyName)
    {
        if($propertyName === 'name') {
            return $this->itemName;
        }
    }

    public function __set(string $propertyName, mixed $value)
    {
        if($propertyName === 'name') {
            $this->itemName = $value;
        }
    }

    public function __unset(string $propertyName)
    {
        if($propertyName === 'name') {
            $this->itemName = '';
        }
    }


    public function getItemName(): string
    {
        return $this->itemName;
    }
}