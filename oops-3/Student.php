<?php
require_once 'IdentifierTrait.php';
require_once 'PrintableTrait.php';

abstract class Student
{
    private string $name;
    private string $email;
    private string $phone;
    private string $address;

    use IdentifierTrait;
    use PrintableTrait;

    public function __construct(string $name, string $email, string $phone, string $address)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getAddress(): string
    {
        return $this->address;
    }
    
}