<?php


include '../config/database.php';
#include 'header.php';

echo("bienvenue sur le blog \n la page d'index se charge" );

$routes = array(
    'home' => '../app/controllers/homeController.php',
    'test' => "testBDD.php",
    '404'=> '404.php'
);



$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);
$action = $action ?? 'home';
$action = isset($routes[$action]) ? $action : '404';
$page = $routes[$action];
include $page;

#include 'footer.php';






