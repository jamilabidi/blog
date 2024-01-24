<?php

try {
    $mysqlClient = new PDO(
        'mysql:host=localhost;dbname=TestDB-Articles;charset=utf8',
        'jamil',
        'jamilou'
    );
} catch (Exception $e) {
    die ('Erreur : ' . $e->getMessage());
}
