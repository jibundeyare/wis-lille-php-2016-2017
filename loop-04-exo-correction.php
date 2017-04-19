<?php

// affichez toutes les clés et valeurs du tableau `$_SERVER`

foreach ($_SERVER as $key => $value) {
	echo "$key : $value<br />\n";
}
