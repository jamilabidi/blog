<?php
echo 'blog controller';
include'../app/persistances/blogPostData.php';


include '../ressources/views/blogPostCreate.tpl.php';
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $args= array (
            'title'=> FILTER_SANITIZE_SPECIAL_CHARS,
            'pseudo'=>FILTER_SANITIZE_SPECIAL_CHARS,
            'body'=>FILTER_SANITIZE_SPECIAL_CHARS,
            'startDate'=>FILTER_UNSAFE_RAW,
            'endDate'=>FILTER_UNSAFE_RAW,
            'importance_level'=>FILTER_UNSAFE_RAW


    );
    $postSubmitted=filter_input_array(INPUT_POST,$args);
    //if($postSubmitted['pseudo']==''){$postSubmitted['pseudo']='anonyme';}
    $postSubmitted['pseudo']= ('' == $postSubmitted['pseudo']) ? 'anonyme':$postSubmitted['pseudo'] ;
    var_dump($_POST);
    var_dump($postSubmitted);
    blogPostCreate($mysqlClient,$postSubmitted);

}





?>


