<?php

// inclusion du script d'autoloading
require __DIR__ . '/vendor/autoload.php';

// paramètres de connexion à la base de données
$config = new \Doctrine\DBAL\Configuration();

$connectionParams = array(
    'dbname' => 'wis_php',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);

// connexion à la base de données
try {
	$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
	$conn->connect();
} catch (Exception $e) {
	// interception d'une éventuelle erreur

	// affichage de l'erreur
	echo $e->getMessage();
	// interruption du programme
	exit();
}
