<?php ob_start();
//require("../model/media.php");
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
$id_media = $_GET['media'];
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
            <div> Title : <?=  $item['title']?></div>
            <div> Genre : <?=  $item['type']?></div>
            <div> Durée : <?=  $item['time_media']?></div>
            <div> Release Date : <?=  $item['release_date']?></div>
            <div> Summary : <?=  $item['summary']?></div>

        </div>
    <?php endforeach; ?>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>
<script src="public/js/media.js"></script>
