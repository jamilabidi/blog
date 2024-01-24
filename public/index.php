<?php
echo("bienvenue sur le blog");
?>


<?php

if (!isset($_SESSION)) {
    session_start();
}


if (!isset($_SESSION['dateFirstVisit'])) {
    $_SESSION['dateFirstVisit'] = date('Y-m-d-H-i-s');
}



$input = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);
$routes = array(
    '' => "./public/cv.php",
    'page'=>"./public/cv.php",
    'cv' =>  './public/cv.php',
    'hobby' => './public/hobby.php',
    'contact' => './public/questionnaire.php',
);

if(array_key_exists($input,$routes)==true){
    ob_start();
    include $routes[$input];
    $render=ob_get_clean();
    echo $render;
}
else{
    header("HTTP/1.1 404 Not Found");
    include './public/404.php';

}
