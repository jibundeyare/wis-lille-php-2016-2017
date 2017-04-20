<?php

// créez une fonction qui renvoie la moyenne des nombres du tableau $t

$t = [2, 42, 123];

function moyenne($tableau) {
	$somme = 0;

	foreach ($tableau as $valeur) {
		$somme = $somme + $valeur;
	}

	return $somme / count($tableau);
}

$m = moyenne($t);
echo "moyenne : " . $m . "<br />\n";
