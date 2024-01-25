<?php
$title="";
$metadata="";
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $metadata; ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Nova+Square&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#000'
                    },
                    spacing: {
                        '10xl': '56px'
                    },
                    fontSize: {
                        titleGD : '48px'
                    }
                }
            }
        }
    </script>
    <title><?=$title?></title>
</head>
