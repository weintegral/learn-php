<?php

require_once 'identifierTrait.php';
require_once 'printableTrait.php';


abstract class Book
{
    private string $title;
    private string $author;
    private int|float $price;

    public static $type = 'Abstract';

    use IdentifierTrait;
    use PrintableTrait;

    public function __construct(string $title, string $author, int $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function getType(): string
    {
        return self::$type;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function getPrice(): int | float
    {
        return $this->price;
    }
}