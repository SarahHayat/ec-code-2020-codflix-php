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
                <form action="searchView.php" method="post">
                    <input type="search" id="search" name="title" class="form-control"
                           placeholder="Rechercher un film ou une série" value="">

                    <input type="submit" value="Valider " class="btn btn-block bg-red"/>
                </form>
            </div>
        </form>
    </div>
</div>
<?php
$search = isset($_GET['title']) ? $_GET['title'] : null;
$searchs = Media::filterMedias($search);


if (isset($search)) {
    ?>
    <div class="media-list">
        <div class="list-group">
            <h1>Recherche ...</h1>
            <div class="list">
            <?php
            foreach ($searchs as $media) {
                ?>
                <a class="item" href="view/detailFilm.php?media=<?= $media['id']; ?>">
                    <div class="video">
                        <div>
                            <iframe allowfullscreen="" frameborder="0" allow="picture-in-picture"
                                    src="<?= $media['trailer_url']; ?>"></iframe>
                        </div>
                    </div>
                    <div class="title"><?= $media['title']; ?></div>
                </a>
                <?php
            }
            ?>
            </div>
        </div>
    </div>
    <?php
}
?>
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
                                <iframe allowfullscreen="" frameborder="0" allow="picture-in-picture"
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
                    <a class="item" href="view/detailSaison.php?media=<?= $media['id']; ?>">
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
