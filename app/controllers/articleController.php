<pre>
<?php

include'../app/persistances/oneBlogPost.php';
$idArticleRequested = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);

$postAsked=oneBlogPost($mysqlClient,$idArticleRequested);

include '../ressources/views/article.tlp.php';


?>
</pre>
