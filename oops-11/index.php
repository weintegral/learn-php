<?php
require_once 'MySQLConnection.php';
require_once 'PostgresConnection.php';
require_once 'sql/MySQLConnection.php';


$mysql = new MySQL\MySQLConnection();
echo $mysql->connect();

$mysql2 = new SQL\MySQL\MySQLConnection();
echo $mysql2->connect();

$postgres = new Postgres\PostgresConnection();
echo $postgres->connect();