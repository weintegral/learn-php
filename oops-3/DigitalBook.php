<?php

require_once './Book.php';

class DigitalBook extends Book
{
    public int  $fileSize;

    public function __construct(string $title, string $author, int $price, int $fileSize)
    {
        parent::__construct($title, $author, $price);
        $this->fileSize = $fileSize;
    }

    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    public function getPriceAsCurrency(): string
    {
        return "$" . $this->getPrice();
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