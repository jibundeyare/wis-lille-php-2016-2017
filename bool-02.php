<?php

echo '<pre>';
var_dump(0 > 1); // faux
var_dump(0 < 1); // vrai
var_dump(0 >= 1); // faux
var_dump(0 <= 1); // vrai
var_dump(0 == 1); // faux
var_dump(0 != 1); // vrai

$nombre = 0;
var_dump($nombre == 1); // faux
// ATTENTION : l'opérateur d'affectation `=` n'est pas la même chose que l'opérateur de comparaison `==`
var_dump($nombre = 1); // int(1)
echo '</pre>';
