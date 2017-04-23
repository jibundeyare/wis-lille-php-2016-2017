<?php

// intégrez du html dans votre script php afin de présenter les données sous la forme d'un tableau
// vous devez utiliser le framework css boostrap pour rendre la page présentable

// inclusion du script de connexion à la base de données
require __DIR__ . '/doctrine-dbal-connect.php';

// initialisation d'un tableau pour stocker les éventuelles erreurs
$errors = [];

// requête sql
$sql = 'SELECT * FROM utilisateur';

try {
	// exécution de la requête sql
	$stmt = $conn->query($sql);
} catch (Exception $e) {
	// interception d'une éventuelle erreur

	// stockage de l'erreur pour affichage ultérieur
	$errors[] = $e->getMessage();
}

// affichage des éventuelles erreurs
foreach ($errors as $error) {
	echo $error . "<br />\n";
}

// affichage des données
while ($row = $stmt->fetch()) {
	echo $row['id'] . "<br />\n";
	echo $row['prenom'] . "<br />\n";
	echo $row['nom'] . "<br />\n";
	echo $row['email'] . "<br />\n";
	echo $row['site'] . "<br />\n";
	echo "<br />\n";
}
