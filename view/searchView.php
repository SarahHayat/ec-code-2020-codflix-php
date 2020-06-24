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
                <form action="#" method="post">
                    <input type="search" id="search" name="title" class="form-control"
                           placeholder="Rechercher un film ou une série">

                    <input type="submit" value="Valider " class="btn btn-block bg-red"/>
                </form>
            </div>
        </form>
    </div>
</div>
<?php
$search = $_GET['title'];
if (isset($search)) {
    $results = Media::filterMedias($search);
}
?>
<div class="media-list">
    <?php
    foreach ($results as $result) {

        if ($result['type'] == "film") { ?>
            <div>
            <a class="item" href="view/detailFilm.php?media=<?= $result['id']; ?>">
                <div class="video">
                    <div>
                        <iframe allowfullscreen="" frameborder="0" allow="picture-in-picture"
                                src="<?= $result['trailer_url']; ?>"></iframe>
                    </div>
                </div>
                <div class="title"><?= $result['title']; ?></div>
            </a>
        <?php } ?>
        </div>
        <?php
    }
    ?>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>
