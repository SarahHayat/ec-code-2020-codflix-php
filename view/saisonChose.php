<?php ob_start();
require("../model/media.php");
?>
    <head>
        <meta charset="utf-8"/>
        <title>Cod'Flix</title>

        <link href="../public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="../public/lib/font-awesome/css/all.min.css" rel="stylesheet"/>

        <link href="../public/css/partials/partials.css" rel="stylesheet"/>
        <link href="../public/css/layout/layout.css" rel="stylesheet"/>

    </head>
    <div id="contenue">

        <?php

        $episodes = Media::getSerieEpisodeBySaison($_GET['media'], $_GET['saison'], $_GET['episode']);
        foreach ($episodes as $episode): ?>
            <div>
                <a onclick="showDetail()" id="name">
                    <?= $episode['name_episode']?>
                </a>
                <div id="summary">
                    <?= $episode['summary_episode']?>
                </div>
            </div>
       <?php endforeach;
        ?>
    </div>
    <script src="../public/js/media.js"></script>




