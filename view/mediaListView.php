<?php ob_start(); ?>

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
    <?php foreach( $medias as $media ): ?>

        <a class="item" href="index.php?media=<?= $media['id']; ?>">
            <div class="video">
                <div>
                    <iframe allowfullscreen="" frameborder="0" src="<?= $media['trailer_url']; ?>" ></iframe>
                </div>
            </div>
            <div class="title"><?= $media['title']; ?></div>
            <?php
            /*
             * display the date in letter
             */
            $date=$media['release_date'];

            list($year, $month, $day) = explode("-", $date);

            $date_release = "$day/$month/$year";

            $months = array("janvier", "février", "mars", "avril", "mai", "juin",
                "juillet", "août", "septembre", "octobre", "novembre", "décembre");

            $date_release = "le $day ".$months[$month-1]." $year";
            ?>
            <div class="release">Date de sortie : <?= $date_release; ?></div>
        </a>

    <?php endforeach; ?>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>
