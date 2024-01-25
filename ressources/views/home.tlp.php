<?php include '/var/www/blog/ressources/views/layout/header.tlp.php' ?>
<?php if ($postAsked== false): ?>
<div> pas de contenu à afficher </div>
<?php else:
foreach ($postAsked as $key => $value): ?>
<div> titre:    <?= $value['title']; ?></div>
<div> contenu: <?= $value['body']; ?></div>
<div> pseudo: <?= $value['pseudo']; ?></div>
<?php endforeach; ?>
<?php endif; ?>
<?php include '/var/www/blog/ressources/views/layout/footer.tlp.php' ?>





