<pre>
<?php
try {


    $mysqlClient = new PDO(
        'mysql:host=localhost;dbname=TestDB-Articles;charset=utf8',
        'jamil',
        'jamilou'

    );

}
catch (Exception $e)
{
    die ('Erreur : ' .$e ->getMessage());
}




// On récupère tout le contenu de la table authors
$sqlQuery = 'SELECT * FROM Authors ;';
$authorsStatement = $mysqlClient->prepare($sqlQuery);
$authorsStatement->execute();

$authors = $authorsStatement->fetchAll();
var_dump($authors);
#var_dump($authors);
// On affiche chaque author un à un
#print_r($authors[27]);

foreach ($authors as $key=>$author){
print_r($author) ."\n";
}
/*
foreach ($authors as &$author) {

    vardump( $authors[$author['nom']]);

}
*/
?>



</pre>
