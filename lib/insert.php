<?php

    require_once("connect.php");

    if (!$conn->query("SELECT * FROM `lib_autor` WHERE `name`='".$_POST['autor']."'")->fetch_assoc()) $conn->query("INSERT INTO `lib_autor` VALUES (null, '".$_POST['autor']."')");

    $conn->query("INSERT INTO `lib_tytul` VALUES (null, '".$_POST['ksiazka']."')");

    if ($conn->query("SELECT * FROM `lib_autor` WHERE `name`='".$_POST['autor']."'")->fetch_assoc() && $conn->query("SELECT * FROM `lib_tytul` WHERE `tytul`='".$_POST['ksiazka']."'")) {
        $id_autor = $conn->query("SELECT * FROM `lib_autor` WHERE `name`='".$_POST['autor']."'")->fetch_assoc()['id_autor'];
        $id_tytul = $conn->query("SELECT * FROM `lib_tytul` WHERE `tytul`='".$_POST['ksiazka']."'")->fetch_assoc()['id_tytul'];

        $conn->query("INSERT INTO `lib_autor_tytul` VALUES (null, '".$id_autor."', '".$id_tytul."')");
    }

    header("Location: ../index.php");

    $conn->close();

?>