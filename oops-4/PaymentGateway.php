<?php


interface PaymentGateway {
    public function setCardNumber(string $cardNumber): void;
    public function setCardHolderName(string $cardHolderName): void;
    public function setCardExpireDate(string $cardExpireDate): void;
    public function setCardCvv(string $cardCvv): void;
    public function setAmount(float $amount): void;
    public function processPayment(float $amount): void;
    public function setDefaultCurrency(): string;
    public function setDefaultCurrencySymbol(): string;
}