<?php
require_once 'config.php';
session_start();

function getArticles($pdo)
{

    $sql = "SELECT * FROM articles LIMIT 5";

    $stmt = $pdo->prepare($sql);

    $stmt->execute();

    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);


    foreach ($articles as $article) {

        if (empty($article)) {

            echo "Aucun article trouvable";
        } else {
            echo $article['title'] . '<br>';

            echo $article['content'] . '<br>';
        }
    }
}

function getArticle($pdo)
{

    $sql = "SELECT * FROM articles";

    $stmt = $pdo->prepare($sql);

    $stmt->execute();

    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($articles as $article) {

        if (!$article) {

            echo "Aucun article trouvable";
        } else {
            echo $article['title'] . '<br>';

            echo $article['content'] . '<br>';

        }
    }
}
?>
