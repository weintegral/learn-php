<?php

declare(strict_types=1);

require_once('Product.php');


$product1 = new Product('soap', 10, 100);
$product2 = new Product('oil', 20);

print_r($product1->priceAsCurrency( divisor: 2, currencySymbol: '€'));
echo PHP_EOL;
print_r($product2->priceAsCurrency(currencySymbol: '$', divisor: 1));


# Garbage Collection
// PHP has a garbage collector that automatically frees up memory when it is no longer needed.