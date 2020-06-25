<?php
ob_start();
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
/**
 * SET the history to the dataBase
 */
$id_media = isset($_GET['media']) ? $_GET['media'] : null;
$id_saison = isset($_GET['saison']) ? $_GET['saison'] : null;
History::setHistory($_SESSION['user_id'], $id_media, $id_saison);

/**
 * Show the detail's film
 */
?>

<div class="media-list">
    <?php

    $medias = Media::getMediaById($id_media);
    foreach ($medias as $media):
    ?>
    <div class="video_summary">
       <div class="video_episode"> <iframe  height="250px" width="450px" allowfullscreen="" frameborder="0"
                src="<?= $media['trailer_url']; ?>"></iframe></div>
        <div><span> Titre : </span><?=  $media['title']?></div>
        <div><span> Genre : </span><?=  $media['name']?></div>
        <div> <span>Durée : </span><?=  $media['time_media']?></div>
        <div> <span>Date de sortie : </span><?=  $media['release_date']?></div>
        <div><span>Resumé : </span><?=  $media['summary']?></div>

    </div>
    <?php endforeach; ?>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>