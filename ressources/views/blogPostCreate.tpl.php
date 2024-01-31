<?php


?>

<html>
<head>
    <title>SOUMISSION D'article</title>
</head>
<body>

<form action="?action=create" method="POST">
    <label for="title">Titre</label>
    <input type="text" name="title" id="title"/><br>

    <label for="pseudo">Titre</label>
    <input type="text" name="pseudo" id="pseudo"/><br>

<!--    <label for="pseudo">pseudo</label>-->
<!--    <input type="number"name="pseudo" id="pseudo"><br>-->

    <label for="body">texte</label>
    <textarea name="body" id="body"></textarea>

    <label for="datedebut">visible à partir de :</label>
    <input type="date" name="startDate" id="datedebut">

    <label for="datefin">visible jusqu'à :</label>
    <input type="date" name="endDate" id="datefin">

    <label for="importance">niveau d'importance:</label>
    <input type="range" name="importance_level" min="0" max="4" id="importance">


    <button type="submit">soumettre</button>
</form>
</body>
</html>
