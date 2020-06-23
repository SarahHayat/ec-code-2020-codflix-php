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
            <li><a href="detailSaison.php?media=<?= $id_media ?>" id="episodes">EPISODES</a></li>
        </ul>
    </nav>
    <div class="video_summary"
    <?php
    $summary = Media::getSaisonByMedia($id_media);
    foreach ($summary as $item) {
        ?>
        <div id="summary_saison"> <?= $item['summary'] ?></div>
        <?php
    }
    ?>
</div>
</div>

<script src="../public/js/media.js"></script>


<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>
