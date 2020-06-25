<?php
ob_start();
//require("../model/media.php");
?>
<head>
    <meta charset="utf-8"/>
    <title>Cod'Flix</title>

    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../lib/font-awesome/css/all.min.css" rel="stylesheet"/>

    <link href="../css/partials/partials.css" rel="stylesheet"/>
    <link href="../css/layout/layout.css" rel="stylesheet"/>

</head>
<?php
$saison_id = $_GET['saison'];

$id_media = $_GET['media'];

Media::setHistory($_SESSION['user_id'], $id_media);
?>
<div id="contenue">


    <div class="list_episode video_summary">

        <?php

        if (isset($saison_id, $id_media)) {
        $episodes = Media::getSerieEpisodeBySaison($saison_id, $id_media);
        foreach ($episodes

        as $episode){
        ?>

        <a class="item">
            <div>
                <iframe allowfullscreen="" frameborder="0" allow="picture-in-picture"
                        src="<?= $episode['url_episode'] ?>"></iframe>
            </div>
            <div style="width: 300px">
                <div class="title"><?= $episode['name_episode'] ?></div>
                <div class="title"><?= $episode['time_media'] ?></div>
                <p class="description"> <?= $episode['summary_episode'] ?></p>
            </div>
            <?php
            }
            }
            ?>
        </a>

    </div>


</div>
<script src="../js/media.js"></script>




