<?php
function lastBlogPosts(PDO $mysqlClient, $numberArticles){

    $lastPosts=[];
    $mySqlQuery="SELECT * FROM Articles JOIN Authors ON Articles.Authors_id=Authors.id LIMIT $numberArticles;";
    $lastPosts = $mysqlClient->prepare($mySqlQuery);
    $lastPosts->execute();
    $lastPosts = $lastPosts->fetchAll();
    return $lastPosts;
}
function blogPostByld(PDO $mysqlClient, $idArticleRequested){
    $mySqlQuery="SELECT * FROM Articles JOIN Authors ON Articles.Authors_id=Authors.id WHERE Articles.id= :id;";
    $onePostRequested = $mysqlClient->prepare($mySqlQuery);
    $onePostRequested->execute(["id"=>$idArticleRequested]);
    return $onePostRequested->fetchAll();
}
function commentsByBlogPost(PDO $mysqlClient, $idArticleRequested){
    $mySqlQuery="select comments.body,comments.date ,Authors.pseudo from comments INNER JOIN Authors ON Authors.id=comments.Authors_id where Articles_id =:id;";
    $onePostRequested = $mysqlClient->prepare($mySqlQuery);
    $onePostRequested->execute(["id"=>$idArticleRequested]);
    return $onePostRequested->fetchAll();
}


