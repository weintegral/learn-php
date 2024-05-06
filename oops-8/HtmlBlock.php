<?php

abstract class HtmlBlock 
{
    public function __construct(private string $content)
    {}

    abstract public static function getOpeningTag(): string;

    abstract public static function getClosingTag(): string;

    public function __toString()
    {
        return static::getOpeningTag() . $this->content . static::getClosingTag();
    }

    public function __destruct()
    {
        echo get_called_class() . ' instance destroyed';
    }
}