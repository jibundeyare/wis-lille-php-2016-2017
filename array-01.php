<?php

// tableau vide (ancienne notation)
$t = array();

// tableau avec plusieurs éléments (ancienne notation)
$t = array(123, 3.14, "foo bar baz", 'lorem ipsum', true, false);

// tableau vide (nouvelle notation)
$t = [];

// tableau avec plusieurs éléments (nouvelle notation)
$t = [123, 3.14, "foo bar baz", 'lorem ipsum', true, false];

// compte du nombre d'éléments
echo "t contient " . count($t) . " éléments<br />\n";
