<?php

require_once 'Client.php';
require_once 'MasterCard.php';
require_once 'Visa.php';

$cardType = 'master';

$client = new Client();

if($cardType === 'master') {
    $masterCard = new MasterCard();
    $client->acceptPayment($masterCard, 100, 123456789, 'John Doe', '12/25', 123);
} 

if($cardType === 'visa') {
    $visaCard = new Visa();
    $client->acceptPayment($visaCard, 100, 123456789, 'John Doe', '12/25', 123);
}
