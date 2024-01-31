<?php


include '../config/database.php';

$routes = array(
    'home' => '../app/controllers/homeController.php',
    'test' => "testBDD.php",
    'article' =>"../app/controllers/blogPostController.php",
    'create'=>"../app/controllers/blogPostCreateController.php",
    '404'=> '404.php'
);

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);
$action = $action ?? 'home';
$action = isset($routes[$action]) ? $action : '404';
$page = $routes[$action];
include $page;







