<?php

// nombre aléatoire entre compris entre 0 et 300
$nombre = rand(0, 300);

// afficher le nombre
echo "nombre : " . $nombre . "<br />\n";

if ($nombre < 100) {
	echo "nombre est plus petit que 100<br />\n";
} elseif ($nombre >= 100 && $nombre < 200) {
	// nombre est plus grand ou égal à 100 ET nombre est plus petit que 200
	echo "nombre est compris entre 100 et 199 inclus<br />\n";
} else {
	// tous les autres cas
	echo "nombre est plus grand ou égal à 200<br />\n";
}
