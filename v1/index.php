<?php

require_once "./Student.php";

$student = new Student;

$result = $student->getInterScore('sai');

echo $result;

echo "<br>";

$student2 =  new Student;
$student2->name;
$result2 = $student->getInterScore('vamsi');
echo $result2;