<?php

// inclusion d'un autre fichier
require('array-03.php');

// parcours de tableaux dans un tableau
foreach ($users as $user) {
	echo $user['id'] . "<br />\n";
	echo $user['name'] . "<br />\n";
	echo "<br />\n";
}
