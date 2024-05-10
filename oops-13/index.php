<?php
use Utility\{Chart, Bar};
use Utility\Shape\Triangle;

require_once 'bootstrap.php';

$chart = new Chart();
$chart->draw();


$bar = new Bar();
$bar->draw();

$triangle = new Triangle();
$triangle->draw();