<?php

if($argc < 2) {
    echo "Please provide student Name to this script to print Student information";
    die;
}

$studentData = [
    [
        'firstName' => 'John',
        'lastName' => 'Doe',
        'email' => 'john.doe@example.com',
        'phone' => '123-456-7890',
        'dateOfBirth' => '1995-05-15',
        // Add more fields as needed
    ],
    [
        'firstName' => 'Jane',
        'lastName' => 'Smith',
        'email' => 'jane.smith@example.com',
        'phone' => '987-654-3210',
        'dateOfBirth' => '1990-08-22',
        // Add more fields as needed
    ],
    [
        'firstName' => 'Bob',
        'lastName' => 'Johnson',
        'email' => 'bob.johnson@example.com',
        'phone' => '555-123-4567',
        'dateOfBirth' => '1998-03-10',
        // Add more fields as needed
    ],
    [
        'firstName' => 'Alice',
        'lastName' => 'Williams',
        'email' => 'alice.williams@example.com',
        'phone' => '111-222-3333',
        'dateOfBirth' => '1993-11-05',
        // Add more fields as needed
    ],
    [
        'firstName' => 'Chris',
        'lastName' => 'Davis',
        'email' => 'chris.davis@example.com',
        'phone' => '999-888-7777',
        'dateOfBirth' => '1997-01-25',
        // Add more fields as needed
    ],
];

$studentNameInput = $argv[1];

$result = [];

foreach($studentData as $key => $val) {
    if ($val['firstName'] === $studentNameInput) {
        $result = $val;
    }
}



if(count($result) === 0) {
    echo "We don't have any record with name {$studentNameInput}";
} else {
    print_r($result);
}