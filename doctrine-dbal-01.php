<?php

require('doctrine-dbal-connect.php');

$sql = 'SELECT * FROM utilisateur';

try {
	$stmt = $conn->query($sql);
} catch (Exception $e) {
	echo $e->getMessage();
	exit();
}

while ($row = $stmt->fetch()) {
	echo $row['id'] . "<br />\n";
	echo $row['prenom'] . "<br />\n";
	echo $row['nom'] . "<br />\n";
	echo $row['email'] . "<br />\n";
	echo $row['site'] . "<br />\n";
	echo "<br />\n";
}
