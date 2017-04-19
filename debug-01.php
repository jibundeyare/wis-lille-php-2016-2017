<?php

// la fonciton `var_dump()` permet d'inspecter le contenu d'une variable
// cette fonction est utile au concepteur / réalisateur d'une application
// elle ne doit surtout pas être utilisée pour afficher des infos à l'utilisateur final
// pour afficher des infos à l'utilisateur final, utilisez `echo`

$nombre = 123;
$autreNombre = 3.14;
$texte = "foo";
$autreTexte = 'bar';
$jour = true;
$nuit = false;

echo '<pre>';
var_dump($nombre);
var_dump($autreNombre);
var_dump($texte);
var_dump($autreTexte);
var_dump($jour);
var_dump($nuit);
echo '</pre>';
