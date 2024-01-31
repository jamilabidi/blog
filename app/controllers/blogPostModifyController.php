<?php
echo 'blog controller Modify';
include'../app/persistances/blogPostData.php';


$idArticleRequested = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);
$postAsked=blogPostByld($mysqlClient,$idArticleRequested);
include '../ressources/views/blogPostUpdate.tlp.php';


var_dump($idArticleRequested);
var_dump($postAsked);
//
//if ($_SERVER['REQUEST_METHOD']=='POST'){
//    $args= array (
//        'title'=> FILTER_SANITIZE_SPECIAL_CHARS,
//        'pseudo'=>FILTER_SANITIZE_SPECIAL_CHARS,
//        'body'=>FILTER_SANITIZE_SPECIAL_CHARS,
//        'startDate'=>FILTER_UNSAFE_RAW,
//        'endDate'=>FILTER_UNSAFE_RAW,
//        'importance_level'=>FILTER_UNSAFE_RAW
//
//
//    );
//    $postSubmitted=filter_input_array(INPUT_POST,$args);
//    //if($postSubmitted['pseudo']==''){$postSubmitted['pseudo']='anonyme';}
//    $postSubmitted['pseudo']= ('' == $postSubmitted['pseudo']) ? 'anonyme':$postSubmitted['pseudo'] ;
//    var_dump($_POST);
//    var_dump($postSubmitted);
//    blogPostCreate($mysqlClient,$postSubmitted);
//
//}

