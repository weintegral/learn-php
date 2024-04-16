<?php
require_once 'PaymentGateway.php';
require_once 'DefaultCurrencyTrait.php';

class Visa implements PaymentGateway
{
    use DefaultCurrencyTrait;
    
    public function setCardNumber(string $cardNumber): void
    {
        // Contacting Visa and passing card Number
    }
    public function setCardHolderName(string $cardHolderName): void
    {
        // Contacting Visa and passing card Holder Name
    }
    public function setCardExpireDate(string $cardExpireDate): void
    {
        // Contacting Visa and passing card Expire Date
    }
    public function setCardCvv(string $cardCvv): void
    {
        // Contacting Visa and passing card CVV
    }
    public function setAmount(float $amount): void
    {
        // Contacting Visa and passing amount
    }
    public function processPayment(float $amount): void
    {
        // Contacting Visa and processing payment
    }
}