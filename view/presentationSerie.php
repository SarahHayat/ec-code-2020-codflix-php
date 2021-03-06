<?php ob_start();
?>
<head>
    <meta charset="utf-8"/>
    <title>Cod'Flix</title>

    <link href="public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="public/lib/font-awesome/css/all.min.css" rel="stylesheet"/>

    <link href="public/css/partials/partials.css" rel="stylesheet"/>
    <link href="public/css/layout/layout.css" rel="stylesheet"/>

</head>
<?php
$id_media = isset($_GET['media']) ? $_GET['media'] : null;
?>

<div class="media-list">
    <nav>
        <ul id="menu">
            <li><a id="presentation">PRESENTATION</a></li>
            <li><a href="index.php?action=serie&media=<?= $id_media ?>" id="episodes">EPISODES</a></li>
        </ul>
    </nav>
    <?php

    $summary = Media::getSummarySaison($id_media);
    foreach ($summary as $item):
        ?>
        <div class="video_summary">
            <div class="video_episode"> <iframe  height="250px" width="450px" allowfullscreen="" frameborder="0"
                                                 src="<?= $item['trailer_url']; ?>"></iframe></div>
            <div><span>Titre :</span> <?=  $item['title']?></div>
            <div><span> Genre : </span><?=  $item['type']?></div>
            <div><span> Durée : </span><?=  $item['time_media']?></div>
            <div><span> Date de sortie : </span><?=  $item['release_date']?></div>
            <div> <span>Resumé : </span><?=  $item['summary']?></div>

        </div>
    <?php endforeach; ?>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>
<script src="public/js/media.js"></script>
