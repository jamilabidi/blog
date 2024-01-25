<?php
function lastBlogPosts(PDO $mysqlClient, $numberArticles){

    $lastPosts=[];
    $mySqlQuery="SELECT * FROM Articles JOIN Authors ON Articles.Authors_id=Authors.id LIMIT $numberArticles;";
    $lastPosts = $mysqlClient->prepare($mySqlQuery);
    $lastPosts->execute();
    $lastPosts = $lastPosts->fetchAll();
    return $lastPosts;
}
