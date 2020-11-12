<?php

    session_start();

    require_once("connect.php");

    $conn->query("INSERT INTO `lib_wypozyczenia` VALUES (null, 
    (SELECT `id_user` FROM `lib_users` WHERE `name`='".$_SESSION['login']."'), 
    '".$_POST['ksiazka']."', 
    CURDATE(), DATE_ADD(CURDATE(), INTERVAL 5 DAY))");

    header("Location: ../index.php");

    $conn->close();

?>