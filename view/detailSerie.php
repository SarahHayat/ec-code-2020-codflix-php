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

    <div class="media-list">
        <?php
        $id_media = $_GET['media'];
        ?>
        <input id="id_media" type="hidden" value="<?= $id_media ?>">
        <nav>
            <ul id="menu">
                <li><a id="presentation">PRESENTATION</a></li>
                <li><a id="episodes">EPISODES</a></li>
            </ul>
        </nav>
        <div id="contenu_presentation">
            <select name="saison" id="saison" onchange="myChoices()">
                <option value="NULL"> Choisir une saison</option>
            <?php
            $saisons = Media::getSerieDetail($id_media);
            foreach ($saisons as $saison):
            ?>

            <option value="<?= $saison['id_saison']?>" name="saison"><?= $saison['name_saison']?></option>

            <?php
            endforeach;
            ?>
        </select>
            <select name="episode" id="episode" onchange="myChoices()">
                <option value="NULL"> Choisir une episode</option>
                <?php
                $episodes = Media::getSerieDetail($id_media);
                foreach ($episodes as $episode):
                    ?>

                    <option value="<?= $episode['id_episode']?>" name="episode"><?= $episode['name_episode']?></option>

                <?php
                endforeach;
                ?>
            </select>
            <div id="contenue" >

            </div>
        </div>
    </div>
    <script src="../public/js/media.js"></script>


<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>