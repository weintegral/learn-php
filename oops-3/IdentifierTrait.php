<?php


trait IdentifierTrait
{
    private int $id;

    public function getId(): int
    {
        return $this->id;
    }
}