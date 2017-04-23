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
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>formulaire de création d'un utilisateur</title>
		<link rel="stylesheet" href="front/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="front/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" />
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">

					<?php
					// affichage d'une `div` de type `alert` seulement s'il y a des erreurs
					if ($errors) {
					?>
					<div class="alert alert-danger" role="alert">
					<?php
					// affichage des éventuelles erreurs
					foreach ($errors as $error) {
						echo $error . "<br />\n";
					}
					?>
					</div>
					<?php
					}
					?>

					<table class="table table-striped">
						<tr>
							<th>id</th>
							<th>prenom</th>
							<th>nom</th>
							<th>email</th>
							<th>site</th>
						</tr>
						<?php
						// affichage des données (en prenant soin d'échapper les caractères protégés en html)
						while ($row = $stmt->fetch()) {
							echo "<tr>\n";
							echo "<td>" . htmlentities($row['id']) . "</td>\n";
							echo "<td>" . htmlentities($row['prenom']) . "</td>\n";
							echo "<td>" . htmlentities($row['nom']) . "</td>\n";
							echo "<td>" . htmlentities($row['email']) . "</td>\n";
							echo "<td>" . htmlentities($row['site']) . "</td>\n";
							echo "</tr>\n";
						}
						?>
					</table>

				</div>
			</div>
		</div>

		<script href="front/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	</body>
</html>