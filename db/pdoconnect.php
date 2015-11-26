<?php

$dsn = 'mysql:host=shop.c2g7heuzpzpp.eu-west-1.rds.amazonaws.com;port=3306;dbname=shop';
$user = 'liveShop';
$password = 'AWSLiveShop';

try {
$pdo = new PDO($dsn, $user, $password);
//echo 'Connected!';
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}