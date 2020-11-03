<?php

    function loadArticles() {

        $conn = new mysqli('172.16.131.125', '03_lipiec', 'Q@wertyuiop', '03_lipiec');

        $result = $conn->query("SELECT * FROM `articles`");

        $article;

        while ($rs = $result->fetch_assoc()) {

            $day;
            $month;
            $year;

            echo('
            <div class="panel '.$rs['color'].'">

            <div class="panel-background"></div>

            <span class="date"><h2 class="day">'.$day.'</h2><p class="month">'.$month.'</p><p class="year">'.$year.'</p></span>

            <div class="header">
                <nav class="navbar">
                    <a href="#"><li class="link"><i class="fas fa-heart"></i></i></li></a>
                    <a href="#"><li class="link"><i class="fas fa-comment-alt"></i></li></a>
                    <a href="#"><li class="link"><i class="fas fa-share-alt-square"></i></li></a>
                </nav>
                <p class="author">'.$rs['author'].'</p>
                <button class="button"></button>

                <h2 class="text-header">'.substr($rs['header'], 0, 70).'</h2>
                <h4 class="text">'.substr($rs['text'], 0, 250).'...</h4>
            </div>
            </div>');

        echo($article);

    }

?>