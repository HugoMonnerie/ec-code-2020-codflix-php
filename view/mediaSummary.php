<?php ob_start(); ?>

    <div class="trailer">

        <iframe allowfullscreen="" frameborder="0" src="<?= $media['trailer_url']; ?>" ></iframe>

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

    </div>

    <div class="summary">

        <p><?= $media['summary']; ?></p>

    </div>

<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>
