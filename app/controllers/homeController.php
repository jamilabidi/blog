<pre>
<?php
echo "hello World \n";
 include'../app/persistances/blogPostData.php';



 $results=lastBlogPosts($mysqlClient);


 print_r($results);

 ?>
</pre>
