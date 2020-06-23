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


    <div>
        <select name="episode" id="episode" onchange="choixEpisode()">
            <option value="NULL"> Choisir un episode</option>
            <?php
            if (isset($_GET['saison'], $_GET['media'])) {
                $episodes = Media::getSerieEpisodeBySaison($_GET['saison'], $_GET['media']);
                foreach ($episodes as $episode): ?>
                    ?>

                    <option value="<?= $episode['id_episode'] ?>"
                            name="episode"><?= $episode['name_episode'] ?></option>

                <?php
                endforeach;
            }
            ?>
        </select>
    </div>
    <div>
        <?php
        if (isset($_GET['episode'])) {
            $summary = Media::getSummaryByEpisode($_GET['episode']);
            foreach ($summary as $item) {
                ?>
                <div> <?= $item['summary_episode'] ?></div>
                <?php
            }
        }
        ?>
    </div>


</div>
<script src="../public/js/media.js"></script>




