<?php
echo 'blogpostdeletecontroller';
include'../app/persistances/blogPostData.php';

$idArticleRequested = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);
echo $idArticleRequested;
deleteCommentFromOnePost($mysqlClient, $idArticleRequested);
deleteArticlesHasCategoriesFromOnePost($mysqlClient, $idArticleRequested);
deleteArticle($mysqlClient, $idArticleRequested);
include '../ressources/views/blogPost.tlp.php';

