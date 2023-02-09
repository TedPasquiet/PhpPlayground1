<?php
require "../vendor/autoload.php";
// objet $router est créé en utilisant la classe AltoRouter
$router = new AltoRouter();
// La constante VIEW_PATH est définie pour stocker le chemin vers le dossier des vues de l'application.
define('VIEW_PATH', dirname(__DIR__) .'/views' );

$router->map('GET', '/blog', function(){
  require(VIEW_PATH) .'/post/index.php';
});
$router->map('GET', '/category', function(){
    require(VIEW_PATH) .'/category/show.php';
});
// Méthode match de l'objet $router est appelée pour trouver la route correspondante à la requête actuelle
$match = $router->match();
$match['target']();