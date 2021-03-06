<?php ob_start(); ?>

    <div class="title">

        <h2><?= $media['title']; ?></h2>

    </div>

    <div class="trailer">

        <div class="d-flex flex-column">
            <div class="p-2">
                <iframe src="<?= $media['trailer_url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

    </div>

    <div class="release-date">

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

        <p>Date de sortie : <?= $date_release; ?></p>
        <p>Genre : <?= $genre['name']; ?></p>

    </div>

    <div class="summary">

        <p><?= $media['summary']; ?></p>

    </div>

<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>
