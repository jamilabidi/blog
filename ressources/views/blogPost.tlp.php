<?php include '../ressources/views/layout/header.tlp.php' ?>

<?php if ($postAsked == false): ?>
    <div xmlns="http://www.w3.org/1999/html"> pas de contenu à afficher</div>
<?php else: ?>

<h2>ARTICLE:</h2>
<?php foreach ($postAsked

as $key => $value): ?>
<h3> titre: <?= $value['title']; ?></h3>
<form action="?action=blogPostModify&id=<?= $value['id'] ?>" method="POST">
    <div>
        <label for="body">texte</label>
        <textarea name="body" id="body"><?= $value['body']; ?></textarea>
    </div>
    <div> pseudo: <?= $value['pseudo']; ?></div>


    <button>
        <a href="/?action=blogPostModify&id=<?= $value['id'] ?>"> Modifier l'article </a>
    </button>

    <button>
        <a href="/?action=blogPostDelete&id=<?= $value['id'] ?>"> Supprimer l'article </a>
    </button>
    <?php endforeach; ?>
    <?php endif; ?>

    <?php if ($commentsReferingToArticle == false): ?>
        <div> pas de commentaire à afficher</div>
    <?php else: ?>
        <br>
        =====================================================================================================
        <br>

        <h2>COMMENTAIRE(S):</h2>
        <br>
        =====================================================================================================
        <br>
        <?php foreach ($commentsReferingToArticle as $key => $value): ?>
            <h3> Auteur: <?= $value['pseudo']; ?></h3>
            <p> contenu: <?= $value['body']; ?></p>
            <p> date: <?= $value['date']; ?></p>
            <br>
            =====================================================================================================
            <br>
        <?php endforeach; ?>
    <?php endif; ?>
    <?php include '../ressources/views/layout/footer.tlp.php' ?>
