<?php

$condition1 = true;
$condition2 = false;

// condition1 ET condition2
if ($condition1 && $condition2) {
	echo "les deux conditions sont vraies<br />\n";
} else {
	echo "au moins une des conditions est fausse<br />\n";
}

// condition1 OU condition2
if ($condition1 || $condition2) {
	echo "au moins une des deux conditions est vraie<br />\n";
} else {
	echo "les deux conditions sont fausses<br />\n";
}
