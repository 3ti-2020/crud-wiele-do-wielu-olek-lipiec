<?php

    function table($query, $columns, $idColumn) {

        require("connect.php");

        $result = $conn->query($query);

        echo("<table class='table'>
        <tr>");

        for ($i=0;$i<sizeof($columns);$i++) {
            echo("<th class='cell'>".$columns[$i]."</th>");
        }

        if ($idColumn != null) echo("<th class='cell'>DELETE</th>");

        echo("</tr>");

        while ($rs = $result->fetch_assoc()) {
            echo("<tr>");
            for ($i=0;$i<sizeof($columns);$i++) {
                echo("<td class='cell'>".$rs[$columns[$i]]."</td>");
            }
            if ($idColumn != null) echo("<td class='cell'>
            
            <form action='lib/delete.php'>

                <input type='hidden' name='id' value='".$rs[$idColumn]."'>
                <input type='submit' value='Usuń'>

            </form>
            
            </td>");
            echo("</tr>");
        }

        echo("</table>");

        $conn->close();

    }

?>