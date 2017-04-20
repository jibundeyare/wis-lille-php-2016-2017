<?php

require('vendor/autoload.php');

$config = new \Doctrine\DBAL\Configuration();

$connectionParams = array(
    'dbname' => 'wis_php',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);

try {
	$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
	$conn->connect();
} catch (Exception $e) {
	echo $e->getMessage();
	exit();
}
