<?php

    error_reporting( E_ALL );
    session_start();

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lipiec Olek GR2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
    
        <div class="info">
        
            <a href="https://github.com/3ti-2020/crud-wiele-do-wielu-olek-lipiec">Github</a>

        <?php

            echo(isset($_SESSION['login']) ? "zalogowano" : "niezalogowano");

        ?>

        </div>

        <a href="./karty/index.html"><h1>Karty</h1></a>

        <a href="./lib/logout.php"><h1>Wyloguj</h1></a>

        <a href="./adminPanel.php"><h1>Panel admina</h1></a>

    </header>

    <nav class="nav">

    <form class="login" action="lib/login.php" method="POST">
        
        <input type="text" name="login" placeholder="Login..." required>
        <input type="password" name="password" placeholder="Hasło..." required>
        <span class="password">admin a</span>
        <input type="submit" value="Zaloguj">
    
    </form>

    </nav>

    <main class="main">

        <?php

        require_once("lib/table.php");

        table("SELECT `lib_users`.`name` as 'imie_nazwisko', `lib_autor`.`name` as 'imie_nazwisko_autora', `lib_tytul`.`tytul` as 'tytul', `data_wypozyczenia`, `data_oddania` FROM `lib_wypozyczenia`, `lib_autor_tytul`, `lib_autor`, `lib_tytul`, `lib_users` WHERE `lib_autor_tytul`.`id_autor`=`lib_autor`.`id_autor` AND `lib_autor_tytul`.`id_tytul`=`lib_tytul`.`id_tytul` AND `lib_wypozyczenia`.`id_user`=`lib_users`.`id_user` AND `lib_wypozyczenia`.`id_autor_tytul`=`lib_autor_tytul`.`id_autor_tytul`", array("imie_nazwisko", "imie_nazwisko_autora", "tytul", "data_wypozyczenia", "data_oddania"), null);

        ?>
    
    </main>

</body>
</html>