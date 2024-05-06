<?php

require_once 'Product.php';
require_once 'JsonProductWriter.php';

$writer = new JsonProductWriter();
$product = new Product('Acme', 'Anvil', $writer);
echo $product->write();