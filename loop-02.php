<?php

$t = [123, 3.14, "foo bar baz", 'lorem ipsum', true, false];

// boucle avec autant d'itérations qu'il y a d'éléments dans le tableau
for ($i = 0; $i < count($t); $i++) {
	// affichage de chaque élément
	echo $t[$i] . "<br />\n";
}
