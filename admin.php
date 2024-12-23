<?php
require_once 'config.php';
require_once 'functions.php';
session_start();




if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = isset($_POST["title"]) ? trim($_POST["title"]) : "";
    $content = isset($_POST["content"]) ? trim($_POST["content"]) : "";
    addArticle($pdo, $title, $content);
    header("location: admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Article</title>
</head>

<body>
    <form action="" method="POST">
    <div>
        <label for="title">Ajouter un titre : </label>
        <input type="text" name="title" id="title">
    </div>
    <label for="content">Ajouter du contenu : </label>
    <textarea name="content" id="content"></textarea>
    <button type="submit">Ajouter</button>
    </form>
    <a href="index.php">Page d'accueil</a>
</body>

</html>