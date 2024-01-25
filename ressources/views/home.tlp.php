<?php include '../ressources/views/layout/header.tlp.php' ?>
<?php if ($postAsked == false): ?>
    <div> pas de contenu à afficher</div>
<?php else:
    foreach ($postAsked as $key => $value): ?>
        <div><?= $value['id'] ?></div>
        <div> titre:
            <a href="/?action=article&id=<?= $value['id'] ?>">  <?= $value['title']; ?><a>
        </div>
        <div> contenu: <?= $value['body']; ?></div>
        <div> pseudo: <?= $value['pseudo']; ?></div>
    <?php endforeach; ?>
<?php endif; ?>
<?php include '../ressources/views/layout/footer.tlp.php' ?>





