<?php
require_once 'config.php';
require_once 'functions.php';



if (!isset($_GET['id'])) {

    header('location: index.php');
    exit;
}


$id = $_GET['id'];

$article = getArticle($pdo, $id);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $author = isset($_POST["author"]) ? trim($_POST["author"]) : "";
    $content = isset($_POST["content"]) ? trim($_POST["content"]) : "";

    addComment($pdo, $id, $author, $content);

    header("location: article.php?id=$id&status=success");
    //on récupere status avec $_get
    //header("location: article.php?id=$id&status=success"); permet d'éviter les doublons
    exit;
}


$comments = getComments($pdo);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1><?= $article['title'] ?></h1>
    <p><?= $article['content'] ?></p>
    <p><?= $article['created_at'] ?></p>
    <a href="index.php">index</a>
    <form action="" method="POST">

        <div>
            <label for="author">Auteur : </label>
            <input type="text" name="author" id="author" />
        </div>
        <div>
            <label for="content">Commentaires : </label>
            <textarea name="content" id="content"></textarea>
        </div>
        <button type="submit">Envoyer</button>
    </form>
    <?php foreach ($comments as $comment): ?>

        <h5><?= $comment['author'] ?></h5>
        <p><?= $comment['content'] ?></p>
        <p><?= $comment['created_at'] ?></p>

    <?php endforeach; ?>
</body>

</html>