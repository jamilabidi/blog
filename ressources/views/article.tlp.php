
<?php include '../ressources/views/layout/header.tlp.php' ?>
<?php if ($postAsked== false): ?>
<div> pas de contenu à afficher </div>
<?php else:?>
    <?php foreach ($postAsked as $key => $value): ?>
        <h2> titre:    <?= $value['title']; ?></h2>
        <div> contenu: <?= $value['body']; ?></div>
        <div> pseudo: <?= $value['pseudo']; ?></div>
    <?php endforeach; ?>
<?php endif; ?>
<?php include '../ressources/views/layout/footer.tlp.php' ?>


