<?php

// affectez une valeur au hasard entre 0 et 100 à une variable $stock
// affichez le message "rupture de stock" si $stock est égale 0
// affichez le message "stock en tension" si $stock est compris entre 1 et 10
// affichez le message "stock disponible" si $stock est plus grand que 10

$stock = rand(0, 100);

echo "stock : " . $stock . "<br />\n";

if ($stock == 0) {
	echo "rupture de stock<br />\n";
} elseif ($stock >= 1 && $stock <= 10) {
	echo "stock en tension<br />\n";
} else {
	echo "stock disponible<br />\n";
}
