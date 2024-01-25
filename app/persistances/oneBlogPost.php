<?php
function oneBlogPost(PDO $mysqlClient, $idArticleRequested){
    $mySqlQuery="SELECT * FROM Articles JOIN Authors ON Articles.Authors_id=Authors.id WHERE Articles.id= :id;";
    $onePostRequested = $mysqlClient->prepare($mySqlQuery);
    $onePostRequested->execute(["id"=>$idArticleRequested]);
    return $onePostRequested->fetchAll();
}