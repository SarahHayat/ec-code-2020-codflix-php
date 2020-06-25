<?php
ob_start();
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
/**
 * SET the history to the dataBase
 */
$id_media = isset($_GET['media']) ? $_GET['media'] : null;
$saison_id = isset($_GET['saison']) ? $_GET['saison'] : null;
History::setHistory($_SESSION['user_id'], $id_media, $saison_id);

/**
 * Sow serie's episodes detail
 */
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




