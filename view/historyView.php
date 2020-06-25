<?php
require_once("controller/historyController.php");
ob_start(); ?>
<head>
    <meta charset="utf-8"/>
    <title>Cod'Flix</title>

    <link href="public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="public/lib/font-awesome/css/all.min.css" rel="stylesheet"/>

    <link href="public/css/partials/partials.css" rel="stylesheet"/>
    <link href="public/css/layout/layout.css" rel="stylesheet"/>
</head>


<div class="media-list">
    <h1>HISTORIQUE</h1>
    <div id="contenu">
        <?php
        $id_user = $_SESSION['user_id'];
        $historys = Media::getHistoryByUser($id_user);
        foreach ($historys as $history) {
            $id_history = $history['id'];
            ?>
            <div><?= "Le " . $history["start_date"] . ", vous avez regardé " . $history['title'] . " ." ?></div>
            <a type="button" href="index.php?action=deleteDistinct&id_history=<?=$id_history ?>">supprimer</a>
            <?php
        }
        ?>

    </div>
</div>

<script src="public/js/media.js"></script>
<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>
