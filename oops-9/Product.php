<?php
require_once 'Rateable.php';

class Product
{
    use Rateable;

    public function __construct(
        private string $manufacturer,
        private string $itemName,
        private ProductWriter $productWriter
    )
    {}

    public function __call($name, $arguments)
    {
        if (method_exists($this->productWriter, $name)) {
            return $this->productWriter->$name($this);
        }

        return $this->getName();
    }

    public function getName(): string
    {
        return $this->manufacturer . ' ' . $this->itemName;
    }
}