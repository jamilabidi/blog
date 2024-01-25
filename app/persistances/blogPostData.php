<?php
function lastBlogPosts(PDO $mysqlClient){

    $lastPosts=[];
    $mySqlQuery="SELECT title, pseudo FROM Articles JOIN Authors ON Articles.Authors_id=Authors.id LIMIT 10;";
    $authorsStatement = $mysqlClient->prepare($mySqlQuery);
    $authorsStatement->execute();
    $lastPosts = $authorsStatement->fetchAll();
    return $lastPosts;
}
