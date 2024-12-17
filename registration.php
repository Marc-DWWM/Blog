<?php
require "config.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, password)
VALUES (:username, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':username' => $username, ':password' => $hash]);
    header("location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Admin</title>
</head>

<body>
    <form action="" method="POST">
        <div>
            <label for="name">Username :</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">Inscription</button>
    </form>
</body>

</html>