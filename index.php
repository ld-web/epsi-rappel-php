<?php
// méthode, classe, constructeur, objet, attribut, portée, encapsulation
// héritage, classe abstraite, interface, polymorphisme

// J'inclus l'autoloader généré par Composer
require_once 'vendor/autoload.php';

use App\Client;
use App\Employee;
use App\IDisplayable;
use App\Product;
use App\User;

// 2 - Création d'instance(s) de classe = Objet.
// $user = new User("Bobby");
// //$user->setLogin("Bobby"); // Utilisation du setter
// echo $user->getLogin(); // Utilisation du getter

// var_dump($user);

// $admin = new User("Johnny");
// $admin->setPassword("12345")
//   ->setLogin("Administrateur");
// echo $admin->getLogin();

// var_dump($admin);

// Héritage
$client = new Client("654987312");
var_dump($client);
var_dump($client->getLogin());

$emp = new Employee("Employé modèle");
var_dump($emp);

$product = new Product();
var_dump($product);

/** @var IDisplayable[] */
$items = [$client, $emp, $product];

foreach ($items as $item) {
  $item->display();
}
