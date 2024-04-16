<?php

$name = "John";
$age = 25;
$percentage = 75.5;
$subjects = ["Math", "Science", "English"];
$failed = false;
$gender = NULL;

$address = new stdClass();
$address->street = "123 Main St";
$address->city = "New York";
$address->state = "NY";
$address->zip = "10001";

print $name;
echo $age;
var_dump($subjects);
print_r($subjects);
var_dump($failed);
var_dump($gender);
print_r($address);
die();

print_r($_SERVER);
print_r($_FILES);

# Type Casting
$age = (int) $percentage;
print $age;
$percentage = (float) $age;
$failed = (bool) $age;
$gender = (string) $age;
$subjects = (array) $age;
print_r($subjects);


function getName(): string
{
    return "John";
}

function printName(string $name): void
{
    print $name;
}

$result = getName();
printName('gopi');


## Difference between interpreted and compiled languages
### Interpreted languages: PHP, Python, Ruby, JavaScript, etc. Request -> Interpret(PHP) -> Response, dynamic programming language
### Compiled languages: C, C++, Java, C#, etc. Request -> Compile -> Interpret -> Response, static programming language

# Variable Hierarchies: ENVIRONMENT -> GLOBAL -> FUNCTION -> BLOCK(if, for, while, etc.)


# PHP Default Classes
### stdClass
### Exception
### DateTime
### DateTimeZone
### DateInterval
### DatePeriod
### Closure
### Generator
### Throwable
### Error
### TypeError
### ParseError
### AssertionError
### ArithmeticError
### DivisionByZeroError
### CompileError
### OutOfRangeException
### OverflowException
### UnderflowException
### RangeException
### InvalidArgumentException

# PHP Standards
### https://www.php-fig.org/psr/


# PHP Scope for classes
### public: accessible from anywhere
### protected: accessible from the class and its subclasses
### private: accessible only from the class

