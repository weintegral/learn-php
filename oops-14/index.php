<?php

# FrontEnd Controller

require_once 'vendor/autoload.php';

use App\Student;
use App\Models\Staff;
use Repos\Role;
use Symfony\Component\VarDumper\VarDumper;

$student = new Student();
$student->printDetails();

$staff = new Staff();
$staff->printDetails();


$role = new Role();
VarDumper::dump($role);
$role->printDetails();