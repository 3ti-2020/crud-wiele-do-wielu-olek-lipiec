<?php error_reporting( E_ALL ); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header"></header>

    <main class="main">

        <?php

        require_once("lib/connect.php");

        $query = "SELECT * FROM `lib_autor`";
        $result = $conn->query($query);

        while ($rs = $result->fetch_assoc()) {
            echo("ID ".$row['name']."<br>");
        }

        $conn->close();

        echo("start");

        ?>
    
    </main>

</body>
</html>