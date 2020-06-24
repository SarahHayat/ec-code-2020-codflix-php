<?php ob_start();
require ("../model/media.php");
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
    $medias = Media::getMediaById($id_media);
    foreach ($medias as $media):
    ?>
    <div class="video_summary">
       <div class="video_episode"> <iframe  height="250px" width="450px" allowfullscreen="" frameborder="0"
                src="<?= $media['trailer_url']; ?>"></iframe></div>
        <div> Title : <?=  $media['title']?></div>
        <div> Genre : <?=  $media['name']?></div>
        <div> Durée : <?=  $media['time_media']?></div>
        <div> Release Date : <?=  $media['release_date']?></div>
        <div> Summary : <?=  $media['summary']?></div>

    </div>
    <?php endforeach; ?>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>