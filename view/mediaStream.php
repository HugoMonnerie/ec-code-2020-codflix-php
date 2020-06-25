<?php ob_start(); ?>

<div class="title">

    <h2><?= $media['title']; ?></h2>

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

    <?php
    /*
     * display the time in hhHmmMssS
     */
    $time=$totalTime['TotalTime'];

    list($hour, $minute, $second) = explode(":", $time);

    $seriesTime = "$hour H $minute Min $second Sec ";
    ?>
    <p>Durée total : <?= $seriesTime; ?></p>

    <p>Genre : <?= $genre['name']; ?></p>

</div>

<div class="summary">

    <p><?= $media['summary']; ?></p>

</div>

<h3>Saison 1</h3>
<div class="media-list">
    <?php foreach( $streamsS1 as $stream ): ?>

        <a class="item" href="index.php?stream=<?= $stream['id']; ?>">
            <div class="video">
                <div>
                    <iframe src="<?= $stream['video_url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="title"><?= $stream['title']; ?></div>
        </a>

    <?php endforeach; ?>
</div>

<h3>Saison 2</h3>
<div class="media-list">
    <?php foreach( $streamsS2 as $stream ): ?>

        <a class="item" href="index.php?stream=<?= $stream['id']; ?>">
            <div class="video">
                <div>
                    <iframe src="<?= $stream['video_url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="title"><?= $stream['title']; ?></div>
        </a>

    <?php endforeach; ?>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>
