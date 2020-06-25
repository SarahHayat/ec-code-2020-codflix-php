<?php
session_start();
ob_start();
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
<?php
$saison_id = $_GET['saison'];
//$media_id = $_GET['media'];
$id_media = $_GET['media'];

Media::setHistory($_SESSION['user_id'], $id_media);
?>
<div id="contenue">


    <div class="list_episode video_summary">
        <!--        <select name="episode" id="episode" onchange="choixEpisode()">-->
        <!--            <option value="NULL"> Choisir un episode</option>-->
        <!--            --><?php
        //            $saison_id = $_GET['saison'];
        //            $media_id = $_GET['media'];
        //            if (isset($saison_id, $media_id)) {
        //                $episodes = Media::getSerieEpisodeBySaison($saison_id, $media_id);
        //                foreach ($episodes as $episode): ?>
        <!---->
        <!--                    <option value="--><? //= $episode['id_episode'] ?><!--"-->
        <!--                            name="episode">--><? //= $episode['name_episode'] ?><!--</option>-->
        <!---->
        <!--                --><?php
        //                endforeach;
        //            }
        //            ?>
        <!--        </select>-->
        <?php

        if (isset($saison_id, $id_media)) {
        $episodes = Media::getSerieEpisodeBySaison($saison_id, $id_media);
        //echo 'SELECT episodes.*, saisons.* , DATE_FORMAT(episodes.time_episode, "%Hh%i") as time_media from episodes JOIN saisons ON saisons.id_saison = episodes.saison_id join media on media.id = saisons.media_id WHERE episodes.saison_id = "'.$saison_id.'" AND media.id = "'.$media_id.'"';
        foreach ($episodes  as $episode){
        ?>

        <a class="item" >
            <!--                    <div id="player"></div>-->
            <div>
                <iframe allowfullscreen="" frameborder="0" allow="picture-in-picture"
                        src="<?= $episode['url_episode']; ?>"></iframe>
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
    <!--    <div class="video_summary">-->
    <!--        --><?php
    //        if (isset($_GET['episode'])) {
    //            $summary = Media::getSummaryByEpisode($_GET['episode']);
    //            foreach ($summary as $item) {
    //                ?>
    <!--                <div class="video_episode">-->
    <!--                    <iframe height="250px" width="450px" allowfullscreen="" frameborder="0" allow="picture-in-picture"-->
    <!--                            src="--><? //= $item['url_episode'] . "?autoplay=1"; ?><!--"></iframe>-->
    <!--                </div>-->
    <!--                <div>--><? //= $item['name_episode'] ?><!--</div>-->
    <!--                <div> Durée : --><? //= $item['time_episode'] ?><!--</div>-->
    <!--                <div> --><? //= $item['summary_episode'] ?><!--</div>-->
    <!--                --><?php
    //            }
    //        }
    //        ?>
    <!--    </div>-->


</div>
<script src="../public/js/media.js"></script>




