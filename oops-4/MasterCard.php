<?php
require_once 'PaymentGateway.php';
require_once 'DefaultCurrencyTrait.php';
require_once 'DefaultSymbolTrait.php';

class MasterCard implements PaymentGateway
{
    use DefaultCurrencyTrait;
    use DefaultSymbolTrait {
        DefaultCurrencyTrait::setDefaultCurrencySymbol insteadof DefaultSymbolTrait;
        DefaultSymbolTrait::setDefaultCurrencySymbol as setDefaultSymbol;
    }

    public function setCardNumber(string $cardNumber): void
    {
        $this->setDefaultSymbol();
        $this->setDefaultCurrencySymbol();
        // Contacting MasterCard and passing card Number
    }
    public function setCardHolderName(string $cardHolderName): void
    {
        // Contacting MasterCard and passing card Holder Name
    }
    public function setCardExpireDate(string $cardExpireDate): void
    {
        // Contacting MasterCard and passing card Expire Date
    }
    public function setCardCvv(string $cardCvv): void
    {
        // Contacting MasterCard and passing card CVV
    }
    public function setAmount(float $amount): void
    {
        // Contacting MasterCard and passing amount
    }
    public function processPayment(float $amount): void
    {
        // Contacting MasterCard and processing payment
    }
}