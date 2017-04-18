# Cours de php à WIS (2016-2017)

## Description

Ce repo contient le code écrit durant le cours de php à WIS (Web International School) Lille, session 2016-2017.

## Prérequis

Vous devez installer :
- pour Windows : [WampServer](http://www.wampserver.com/)
- pour Mac : [MAMP & MAMP PRO](https://www.mamp.info/en/)
- [Git](https://git-scm.com/)
- [Composer](https://getcomposer.org/)

Vous devez installer `composer` de façon globale : [Introduction - Composer](https://getcomposer.org/doc/00-intro.md#globally). Dans un terminal, tapez :

	sudo mkdir -p /usr/local/bin
	sudo mv composer.phar /usr/local/bin/composer

Pour vérifier que tout fonctionne, tapez les lignes suivantes dans le terminal :

	php --version
	git --version
	composer --version

Vous devriez avoir un résultat du type :

	[daishi@box ~]$ php --version
	PHP 7.1.2 (cli) (built: Feb 14 2017 21:24:49) ( NTS )
	Copyright (c) 1997-2017 The PHP Group
	Zend Engine v3.1.0, Copyright (c) 1998-2017 Zend Technologies
	[daishi@box ~]$ git --version
	git version 2.11.1
	[daishi@box ~]$ composer --version
	Composer version 1.3.2 2017-01-27 18:23:41

## Utilisation

Certains scripts fonctionnent en ligne de commande, d'autres fonctionnent avec un serveur web.

### Avec la ligne de commande

Ouvrez un terminal puis rendez-vous dans le dossier du projet avec la commande `cd`.

Tapez :

    cd wis-lille-php-2016-2017
    php script.php

### Avec un serveur web

Vous pouvez démarrer un serveur web en ligne de commande avec php.

Ouvrez un terminal puis rendez-vous dans le dossier du projet avec la commande `cd`.

Tapez :

    cd wis-lille-php-2016-2017
    php -S localhost:8000

Vous pourrez alors afficher les scripts dans votre navigateurs.

Par exemple tapez cette url dans votre navigateur : `http://localhost:8000/script.php`

