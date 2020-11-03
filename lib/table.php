<?php

    function table($query, $columns) {

        require_once("connect.php");

        $result = $conn->query($query);

        echo("<table class='table'>
        <tr>");

        for ($i=0;$i<sizeof($columns);$i++) {
            echo("<th>".$columns[$i]."</th>");
        }

        echo("</tr>");

        while ($rs = $result->fetch_assoc()) {
            echo("<tr>");
            for ($i=0;$i<sizeof($columns);$i++) {
                echo("<td>".$rs[$columns[$i]]."</td>");
            }
            echo("</tr>");
        }

        echo("</table>");

        $conn->close();

    }

?>