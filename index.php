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

        <form class="form" action="lib/insert.php" method="POST">

            <label for="autor">Autor:</label>
            <input type="text" name="autor" id="autor">
            <label for="ksiazka">Książka:</label>
            <input type="text" name="ksiazka" id="ksiazka">
            <input type="submit" value="Dodaj">

        </form>

    </nav>

    <main class="main">

        <?php

        require_once("lib/table.php");

        table("SELECT * FROM `lib_autor_tytul`, `lib_autor`, `lib_tytul` WHERE `lib_autor_tytul`.`id_autor`=`lib_autor`.`id_autor` AND `lib_autor_tytul`.`id_tytul`=`lib_tytul`.`id_tytul`", array("id_autor_tytul", "name", "tytul"));

        ?>
    
    </main>

</body>
</html>