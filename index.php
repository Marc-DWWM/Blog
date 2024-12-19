<?php 
    require 'functions.php';
    
    session_start();
    
    
    if (isset($_SESSION['username'])) {
    
        $username = htmlspecialchars($_SESSION['username']);
    
        echo 'Bonjour ' . htmlspecialchars($username) . '<br>';
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
    <a href="login.php">retour à connexion</a>
    <a href="article.php">Article</a>
    <?php
getArticles($pdo);
    ?>
</body>

</html>