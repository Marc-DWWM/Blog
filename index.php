<?php
require_once 'config.php';
require 'functions.php';

$articles = getArticles($pdo);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="login.php">connexion</a>
    <?php foreach ($articles as $article): ?>
<h1><?= $article['title'] ?></h1>
<p><?= $article['content'] ?></p>
<a href="article.php?id=<?=$article['id']?>">Plus d'infos</a>
<?php endforeach; ?>
</body>

</html>