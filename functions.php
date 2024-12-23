<?php


function getArticles($pdo)
{

    $sql = "SELECT id, title, LEFT(content, 200) as content, created_at FROM articles";

    $stmt = $pdo->query($sql);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}




function getArticle($pdo, $id)
{

    $sql = "SELECT * FROM articles WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([':id' => $id]);

    return $stmt->fetch();
}


function addComment($pdo, $article_id, $author, $content)
{

    $sql = "INSERT INTO comments (article_id, author, content)
    VALUES (:article_id, :author, :content)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':article_id' => $article_id, ':author' => $author, ':content' => $content]);
}

function getComments($pdo)
{
    $sql = "SELECT author, content, created_at FROM comments";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();
}

function addArticle($pdo, $title, $content) {
    $sql = "INSERT INTO articles (title, content)
    VALUES (:title, :content)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':title' => $title, ':content' => $content]);
}