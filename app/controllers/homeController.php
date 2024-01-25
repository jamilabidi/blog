<pre>
<?php
echo "le homeController se charge \n";
 include'../app/persistances/blogPostData.php';



 $postAsked=lastBlogPosts($mysqlClient,10);
#print_r($postAsked);
include '../ressources/views/home.tlp.php';


 ?>
</pre>
