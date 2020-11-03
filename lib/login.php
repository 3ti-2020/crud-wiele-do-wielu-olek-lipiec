<?php

    session_start();

    if ($_POST['login'] === "admin" && $_POST['password'] === "haslo123") $_SESSION['login'] = $_POST['login'];

    header("Location: ../secret.php");

?>