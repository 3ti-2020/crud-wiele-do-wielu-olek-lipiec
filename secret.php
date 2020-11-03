<?php

    session_start();

    if (!$_SESSION['login']) {
        header("Location: ./index.php");
    }

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Secret</title>
</head>
<body>

    <header class="header">

        <a href="./index.php">Powrót na główną stronę</a>

        <a href="lib/logout.php">Wyloguj</a>

    </header>

    <nav class="nav">

    </nav>
    
    <main class="main">
        secret.php
    </main>

</body>
</html>