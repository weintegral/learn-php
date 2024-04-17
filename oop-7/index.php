<?php

require_once 'Product.php';


// $studentInfo = new stdClass();
// $studentInfo->name = 'John Doe';
// $studentInfo->age = 25;
// $studentInfo->address = '123 Main St';
// $studentInfo->city = 'New York';
// $studentInfo->state = 'NY';
// $studentInfo->zip = '10001';

// unset($studentInfo->name);

// print_r($studentInfo);

$product = new Product('Apple', 'iPhone');

$product->name = 'iPad';

unset($product->name);


print_r($product);