<?php ob_start(); ?>
<head>
    <meta charset="utf-8"/>
    <title>Cod'Flix</title>

    <link href="public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="public/lib/font-awesome/css/all.min.css" rel="stylesheet"/>

    <link href="public/css/partials/partials.css" rel="stylesheet"/>
    <link href="public/css/layout/layout.css" rel="stylesheet"/>


</head>
<div class="row">
    <div class="col-md-4 offset-md-8">
        <form method="get">
            <div class="form-group has-btn">

                <input type="search" id="search" name="title" class="form-control"
                       placeholder="Rechercher un film ou une serie" value="">

                <button type="submit" class="btn btn-block bg-red">Valider</button>

            </div>
        </form>
    </div>
</div>
<?php
/**
 * search function
 */
$search = isset($_GET['title']) ? htmlspecialchars($_GET['title']) : null;
$searchs = Media::filterMedias($search);


if (isset($search) && strlen($search) > 0 && $searchs != 0) {

    ?>
    <div class="media-list">
        <div class="list-group">
            <h1>Recherche ...</h1>
            <div class="list">
                <?php
                foreach ($searchs as $media) {
                if ($media['type'] == "film") { ?>
                <a class="item" href="index.php?action=film&media=<?= $media['id']; ?>">
                    <?php
                    }else{ ?>
                    <a class="item" href="index.php?action=detailSerie&media=<?= $media['id']; ?>">
                        <?php
                        }
                        ?>
                        <div>
                            <iframe allowfullscreen="" frameborder="0" allow="picture-in-picture"
                                    src="<?= $media['trailer_url']; ?>"></iframe>
                        </div>
                        <form action="">
                            <input type="hidden" value="" name="time" id="time">
                        </form>

                        <div class="title"><?= $media['title'] . " (" . $media['release_date'] . ")" ?></div>
                        <div class="title"><?= $media['time_media'] ?></div>
                    </a>
                    <?php
                    }
                    ?>
            </div>
        </div>
    </div>
    <?php
}
/**
 * Films
 */
?>

<div class="media-list">
    <div>
        <h1>FILMS</h1>
        <div class="list">
            <?php

            $medias = Media::getAvailableMedias();

            foreach ($medias as $media) {
                if ($media['type'] == "film") { ?>
                    <a class="item" href="index.php?action=film&media=<?= $media['id']; ?>">
                        <!--                        <div id="player"></div>-->
                        <div>
                            <iframe allowfullscreen="" frameborder="0" allow="picture-in-picture"
                                    src="<?= $media['trailer_url']; ?>"></iframe>
                        </div>

                        <div class="title"><?= $media['title'] ?></div>

                        <div class="title"><?= $media['time_media'] ?></div>

                    </a>
                <?php }
            }
            ?></div>
    </div>
    <div>
        <?php
        /**
         * Series
         */
        ?>
        <h1>SÉRIES</h1>
        <div class="list">
            <?php

            $medias = Media::getAvailableMedias();

            foreach ($medias as $media) {
                if ($media['type'] == "serie") { ?>
                    <a class="item" href="index.php?action=detailSerie&media=<?= $media['id']; ?>">
                        <!--                        <div id="player"></div>-->
                        <div>
                            <iframe allowfullscreen="" frameborder="0"
                                    src="<?= $media['trailer_url']; ?>"></iframe>
                        </div>

                        <div class="title"><?= $media['title'] ?></div>
                        <div class="title"><?= $media['time_media'] ?></div>

                    </a>
                <?php }
            }
            ?>
        </div>
    </div>
</div>
<script src="public/js/media.js"></script>


<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>
