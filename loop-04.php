<?php

$product = [
	'name' => 'foo bar baz',
	'description' => 'this is a foo bar baz',
	'price' => '99.99',
];

// boucle sur chaque couple clé / valeur du tableau
foreach ($product as $key => $value) {
	// affichage de la clé et de la valeur
	echo "$key : $value<br />\n";
}
