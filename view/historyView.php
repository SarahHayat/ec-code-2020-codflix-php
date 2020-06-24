<?php ob_start(); ?>
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
    <div>
        <?php
        $id_user = $_SESSION['user_id'];
        $historys = Media::getHistoryByUser($id_user);
        foreach ($historys as $history) { ?>
         <div > </div>
        <?php
        }
        ?>
        <ul>

        </ul>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>
