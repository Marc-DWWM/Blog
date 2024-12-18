<?php
require_once 'config.php';

function getArticles($pdo, $title, $content)
{
    $sql = "SELECT * FROM articles WHERE title = :title AND content = :content";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([':title' => $title, ':content' => $content]);

    while ($article = $stmt->fetchALL(PDO::FETCH_ASSOC)) {

        echo $article->title . " - " . $article->content . '<br>';
    }
}

function getArticle($pdo)
{
    $sql = "SELECT * FROM articles";

    $stmt = $pdo->prepare($sql);

    $stmt->execute();

    $articles = $stmt->fetchALL(PDO::FETCH_ASSOC);

    $id = [1, 2, 3, 4, 5];

    foreach ($articles as $article) {

        if (in_array($article['id'], $id)) {

            echo $article['title'] . '<br>';

            echo $article['content'] . '<br>';
        } else {

            echo "Article inexistant" . '<br>';
        }
    }
}
