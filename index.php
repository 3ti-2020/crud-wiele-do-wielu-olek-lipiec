<?php error_reporting( E_ALL ); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lipiec Olek GR2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
    
    </header>

    <nav class="nav">

    <form acton="lib/insert.php" method="POST">

        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor">
        <label for="ksiazka">Książka:</label>
        <input type="text" name="ksiazka" id="ksiazka">
        <input type="submit" value="Dodaj">

    </form>

    </nav>

    <main class="main">

        <?php

        require_once("lib/connect.php");

        $query = "SELECT * FROM `lib_autor`";
        $result = $conn->query($query);

        while ($rs = $result->fetch_assoc()) {
            echo("ID ".$rs['name']."<br>");
        }

        $conn->close();

        echo("start");

        ?>
    
    </main>

</body>
</html>