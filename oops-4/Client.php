<?php

require_once 'PaymentGateway.php';

class Client

{
    public function acceptPayment(
        PaymentGateway $paymentGateway, 
        float $amount, 
        int $cardNumber,
        string $cardHolderName,
        string $cardExpireDate,
        int $cardCvv
        ): void
    {
        $paymentGateway->setCardNumber($cardNumber);
        $paymentGateway->setCardHolderName($cardHolderName);
        $paymentGateway->setCardExpireDate($cardExpireDate);
        $paymentGateway->setCardCvv($cardCvv);
        $paymentGateway->setAmount($amount);
        $paymentGateway->processPayment($amount);
        $paymentGateway->setDefaultCurrencySymbol();
    }
}