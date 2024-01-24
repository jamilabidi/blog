<?php
echo "hello World \n";
 include'../app/persistances/blogPostData.php';
 $db='test';
 $results=lastBlogPosts($db);
 var_dump($results);