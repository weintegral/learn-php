<?php
require_once 'MySQLConnection.php';
require_once 'PostgresConnection.php';
require_once 'sql/MySQLConnection.php';

use MySQL\MySQLConnection as PrimaryMySQLConnection;
use SQL\MySQL\MySQLConnection as SecondaryMySQLConnection;

$mysql = new PrimaryMySQLConnection();
echo $mysql->connect();

$mysql2 = new SecondaryMySQLConnection();
echo $mysql2->connect();

$postgres = new Postgres\PostgresConnection();
echo $postgres->connect();