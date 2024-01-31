<?php
echo 'blog controller Modify';
include'../app/persistances/blogPostData.php';


$idArticleRequested = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);
$commentsReferingToArticle=commentsByBlogPost($mysqlClient,$idArticleRequested);
$postAsked=blogPostByld($mysqlClient,$idArticleRequested);
include '../ressources/views/blogPostUpdate.tlp.php';


var_dump($idArticleRequested);
//var_dump($postAsked);

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $args= array (

        'body'=>FILTER_SANITIZE_SPECIAL_CHARS,



    );
    $postSubmitted=filter_input_array(INPUT_POST,$args);

//    try{
//   blogPostUpdate($mysqlClient,$idArticleRequested,$postSubmitted);}
//    catch (Exception $e)
//    {echo $e->getMessage();}
     blogPostUpdate($mysqlClient,$postSubmitted,$idArticleRequested);
}

