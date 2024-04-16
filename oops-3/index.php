<?php

require_once './PhysicalBook.php';
require_once './DigitalBook.php';
require_once './Book.php';

$title = 'A Random Book'; 
$author = 'Jane Doe'; 
$price = 100; 
$weight = 10;
$fileSize = 20;

$pBook = new PhysicalBook(
    title: $title,
    author: $author,
    price: $price,
    weight: $weight
);


echo $pBook->getType();

// $dBook = new DigitalBook(
//     title: $title,
//     author: $author,
//     price: $price,
//     fileSize: $fileSize
// );

// function getBookDetails(Book $book) {
//     $result =  [
//         'title' => $book->getTitle(),
//         'author' => $book->getAuthor(),
//         'price' => $book->getPrice()
//     ];

//     // if $book of of type PhysicalBook
//     if($book instanceof PhysicalBook) {
//         $result['weight'] = $book->getWeight();
//         $result['priceWithTaxes'] = $book->getPriceWithTaxes();
//     }


//     // if $book of of type DigitalBook
//     if($book instanceof DigitalBook) {
//         $result['fileSize'] = $book->getFileSize();
//     }

//     return $result;
// }


// print_r(getBookDetails($dBook));
// echo PHP_EOL;
// print_r(getBookDetails($pBook));
// echo PHP_EOL;
// // print_r(PhysicalBook::TAXES_PERCENTAGE);
// print_r((new Book(title: $title,
// author: $author,
// price: $price))->getTitle());
// die;