<?php
require_once 'config.php';
require_once 'functions.php';



if (!isset($_GET['id'])) {

    header('location: index.php');
    exit;
}


$id = $_GET['id'];

$article = getArticle($pdo, $id);

if (isset($_POST['author']) && isset($_POST['content'])) {

    $author = $_POST['author'];
    $comments = $_POST['content'];
    addComment($pdo, $article_id, $author, $content);
}

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
    <a href="index.php">index</a>
</body>

</html>