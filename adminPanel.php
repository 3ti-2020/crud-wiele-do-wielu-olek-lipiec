<?php

    session_start();

    if (isset($_SESSION['login'])) {
        require_once("./lib/connect.php");
        if (!$conn->query("SELECT admin FROM `lib_users` WHERE `name` = '".$_SESSION['login']."' AND `admin` = 1")->fetch_assoc()) header("Location: ./index.php");
    }
    else header("Location: ./index.php");

    $conn->close();

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Panel admina</title>
</head>
<body>

    <header class="header">
    
        <a href="./karty/index.html"><h1>Karty</h1></a>

        <a href="./lib/logout.php"><h1>Wyloguj</h1></a>

        <a href="./index.php"><h1>Strona główna</h1></a>

    </header>
    
    <nav class="nav">
    
    </nav>

    <main class="main">

        <?php

            require_once("lib/table.php");

            table("SELECT `id_wypozyczenia`, `lib_users`.`name` as 'imie_nazwisko', `lib_autor`.`name` as 'imie_nazwisko_autora', `lib_tytul`.`tytul` as 'tytul', `data_wypozyczenia`, `data_oddania` FROM `lib_wypozyczenia`, `lib_autor_tytul`, `lib_autor`, `lib_tytul`, `lib_users` WHERE `lib_autor_tytul`.`id_autor`=`lib_autor`.`id_autor` AND `lib_autor_tytul`.`id_tytul`=`lib_tytul`.`id_tytul` AND `lib_wypozyczenia`.`id_user`=`lib_users`.`id_user` AND `lib_wypozyczenia`.`id_autor_tytul`=`lib_autor_tytul`.`id_autor_tytul`", array("imie_nazwisko", "imie_nazwisko_autora", "tytul", "data_wypozyczenia", "data_oddania"), 'id_wypozyczenia');


        ?>

    </main>

</body>
</html>