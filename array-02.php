<?php

// tableau avec clés alphanumériques
$product = [
	'name' => 'foo bar baz',
	'description' => 'this is a foo bar baz',
	'price' => '99.99',
];

// affichage d'une valeur à partir de la clé alphanumérique
echo $product['name'] . "<br />\n";
echo $product['description'] . "<br />\n";
echo $product['price'] . "<br />\n";
