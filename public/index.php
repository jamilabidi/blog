<?php


include '../config/database.php';
include 'footer.php';
include 'header.php';

echo("bienvenue sur le blog");

$routes = array(
    'home' => "accueil.php",
    'test' => "testBDD.php",
    '404'=>"404.php"
);
//todo:     header("HTTP/1.1 404 Not Found");


$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);
$action = $action ?? 'home';
$action = isset($routes[$action]) ? $action : '404';
$page = $routes[$action];
include $page;








