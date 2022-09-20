<?php
// méthode, classe, constructeur, objet, attribut, portée, encapsulation
// héritage, classe abstraite, interface, polymorphisme

// J'inclus l'autoloader généré par Composer
require_once 'vendor/autoload.php';

use App\User;

// 2 - Création d'instance(s) de classe = Objet.
$user = new User("Bobby");
//$user->setLogin("Bobby"); // Utilisation du setter
echo $user->getLogin(); // Utilisation du getter

var_dump($user);

$admin = new User("Johnny");
// $admin->setLogin("Johnny");
echo $admin->getLogin();

var_dump($admin);
