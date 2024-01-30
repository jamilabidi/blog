<pre>
<?php
include'../app/persistances/blogPostData.php';
$idArticleRequested = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);

$postAsked=blogPostByld($mysqlClient,$idArticleRequested);
$commentsReferingToArticle=commentsByBlogPost($mysqlClient,$idArticleRequested);

include '../ressources/views/blogPost.tlp.php';


?>
</pre>
