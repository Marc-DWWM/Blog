<?php

require_once 'functions.php';

if(isset($_POST['title']) && isset($_POST['content'])) {
    $title = $_POST['title'];
    $content = $_post['content'];
}
getArticle($pdo);
// addComment($pdo);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <div>
            <label for="title">Titre : </label>
            <input type="text" name="title" id="title" />
        </div>
        <div>
            <label for="content">Article : </label>
            <textarea name="content" id="content"></textarea>
        </div>
        <button type="submit">Envoyer</button>
    </form>
    <a href="index.php">index</a>
</body>

</html>