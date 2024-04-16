<?php

require_once './Book.php';

class PhysicalBook extends Book
{
    public static float $count = 0.3;
    public int $weight = 100;
    public const TAXES_PERCENTAGE = 0.1;
    public static $type = 'Physical';

    public function __construct(string $title, string $author, int $price, int $weight)
    {
        parent::__construct($title, $author, $price);

        $this->weight = $weight;
    }

    public function getType(): string
    {
        return self::$type;
    }

    // public function __destruct()
    // {
    //     echo "object destroyed";
    // }

    public static function getTaxesPercentage()
    {
        return self::getCount();
    }

    public static function getCount()
    {
        return self::$count;
    }

    public function getWeight(): int
    {
        $weight = $this->weight + 1;
        return $this->weight;
    }

    public function getPriceAsCurrency(): string
    {
        return "$" . $this->getPrice();
    }

    public function getPriceWithTaxes(): string
    {
        $price = $this->getPrice();
        $taxes = $price * self::TAXES_PERCENTAGE;
        $priceWithTaxes = $price + $taxes;
        return "$" . $priceWithTaxes;
    }

    public function printInfo(): string
    {
        $info = [
            $this->getTitle(),
            $this->getAuthor(),
            $this->getPrice()
        ];

        return json_encode($info);
    }
}