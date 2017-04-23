<?php

// inclusion du script de connexion à la base de données
require __DIR__ . '/doctrine-dbal-connect.php';

// initialisation d'un tableau pour stocker les valeurs par défaut des données
$data = [
	'prenom' => '',
	'nom' => '',
	'email' => '',
	'site' => '',
];

// initialisation d'un tableau pour stocker les éventuelles erreurs
$errors = [];

// traitement des données
if ($_POST) {
	// affectation des données envoyées par l'utilisateur au tableau de données par défaut
	$data = $_POST;

	try {
		// insertion des données dans la base de données
		$conn->insert('utilisateur', array(
			'prenom' => $_POST['prenom'],
			'nom' => $_POST['nom'],
			'email' => $_POST['email'],
			'site' => $_POST['site'],
		));
	} catch (Exception $e) {
		// interception d'une éventuelle erreur

		// stockage de l'erreur pour affichage ultérieur
		$errors[] = $e->getMessage();
	}
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

					<?php
					// affichage des données (en prenant soin d'échapper les caractères protégés en html)
					?>
					<form action="" method="post">
						<div class="form-group">
							<label for="prenom">prénom *</label>
							<input class="form-control" name="prenom" id="prenom" type="text" value="<?php echo htmlentities($data['prenom']); ?>" placeholder="prénom" required="" />
						</div>

						<div class="form-group">
							<label for="nom">nom *</label>
							<input class="form-control" name="nom" id="nom" type="text" value="<?php echo htmlentities($data['nom']); ?>" placeholder="nom" required="" />
						</div>

						<div class="form-group">
							<label for="email">email *</label>
							<input class="form-control" name="email" id="email" type="text" value="<?php echo htmlentities($data['email']); ?>" placeholder="prénom.nom@example.com" required="" />
						</div>

						<div class="form-group">
							<label for="site">site</label>
							<input class="form-control" name="site" id="site" type="text" value="<?php echo htmlentities($data['site']); ?>" placeholder="http://exmaple.com" />
						</div>

						<div class="form-group">
							<input class="btn btn-default" type="submit" value="Envoyer" />
						</div>
					</form>

				</div>
			</div>
		</div>

		<script href="front/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	</body>
</html>