
<?php include '../ressources/views/layout/header.tlp.php' ?>

<?php if ($postAsked== false): ?>
<div> pas de contenu à afficher </div>
<?php else:?>
    <h2>ARTICLE:</h2>
    <?php foreach ($postAsked as $key => $value): ?>
        <h3> titre:    <?= $value['title']; ?></h3>
        <div> contenu: <?= $value['body']; ?></div>
        <div> pseudo: <?= $value['pseudo']; ?></div>
    <?php endforeach; ?>
<?php endif; ?>


<?php if ($commentsReferingToArticle== false): ?>
    <div> pas de commentaire à afficher </div>
<?php else:?>
        <br>
        =====================================================================================================
        <br>

        <h2>COMMENTAIRE(S):</h2>
        <br>
        =====================================================================================================
        <br>
    <?php foreach ($commentsReferingToArticle as $key => $value): ?>
        <h3> Auteur:    <?= $value['pseudo']; ?></h3>
        <p> contenu: <?= $value['body']; ?></p>
        <p> date: <?= $value['date']; ?></p>
        <br>
        =====================================================================================================
        <br>
    <?php endforeach; ?>
<?php endif; ?>
<?php include '../ressources/views/layout/footer.tlp.php' ?>
