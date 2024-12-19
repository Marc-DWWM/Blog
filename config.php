<?php
$dsn = 'mysql:host=localhost;dbname=blog;charset=utf8';
$user = "root";
$pass = "";

try {
    $pdo = new PDO($dsn, $user, $pass);

    $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie !" . '<br>';
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
