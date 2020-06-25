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


<div class="history">
    <div class="history_title">
        <h1>HISTORIQUE</h1>
        <a href="index.php?action=deleteAll">tout supprimer</a>
    </div>

    <div class="contenu_history">
        <?php
        $id_user = $_SESSION['user_id'];
        $historys = Media::getHistoryByUser($id_user);
        foreach ($historys as $history) {
            $id_history = $history['id_history'];
            ?>
            <div class="detail-history">
            <div><?= "Le " . $history["start_date"] . ", vous avez regardé " . $history['title'] . " ." ?></div>
            <a href="index.php?action=deleteDistinct&id_history=<?=$id_history ?>">supprimer</a>
            </div>
            <?php
        }
        ?>

    </div>
</div>

<script src="public/js/media.js"></script>
<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>
