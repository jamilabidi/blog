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
function blogPostCreate(PDO $mysqlClient, $postSubmitted){
    $mysqlQuery="INSERT INTO Articles (title,body,Authors_id) values(?, ?, (SELECT id FROM Authors WHERE pseudo= ?));";
    $tempSubmitted = $mysqlClient->prepare($mysqlQuery);
    $tempSubmitted->execute([$postSubmitted['title'],$postSubmitted['body'],$postSubmitted['pseudo']]);
}
function blogPostCreateTEST(PDO $mysqlClient){
    $mysqlquery ="INSERT INTO Articles (title,body,Authors_id) values('test".date('Ymdis')."','bodytest".date('Ymdis')."',6);";
    $mysqlClient->query($mysqlquery);
}
