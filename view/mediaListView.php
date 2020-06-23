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
                <input type="search" id="search" name="title" value="<?= $search; ?>" class="form-control"
                       placeholder="Rechercher un film ou une série">

                <button type="submit" class="btn btn-block bg-red">Valider</button>
            </div>
        </form>
    </div>
</div>

<div class="media-list">
    <div>
        <h1>FILMS</h1>
        <div class="list">
            <?php

            $medias = Media::getAvailableMedias();

            foreach ($medias as $media) {
                if ($media['type'] == "film") { ?>
                    <a class="item" href="view/detailFilm.php?media=<?= $media['id']; ?>">
                        <div class="video">
                            <div>
                                <iframe allowfullscreen="" frameborder="0"
                                        src="<?= $media['trailer_url']; ?>"></iframe>
                            </div>
                        </div>
                        <div class="title"><?= $media['title']; ?></div>
                    </a>
                <?php }
            }
            ?></div>
    </div>
    <div>
        <h1>SÉRIES</h1>
        <div class="list">
            <?php

            $medias = Media::getAvailableMedias();

            foreach ($medias as $media) {
                if ($media['type'] == "serie") { ?>
                    <a class="item" href="view/detailSerie.php?media=<?= $media['id']; ?>">
                        <div class="video">
                            <div>
                                <iframe allowfullscreen="" frameborder="0"
                                        src="<?= $media['trailer_url']; ?>"></iframe>
                            </div>
                        </div>
                        <div class="title"><?= $media['title']; ?></div>
                    </a>
                <?php }
            }
            ?>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>
