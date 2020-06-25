<?php ob_start(); ?>

<div class="title">

    <h2><?= $stream['title']; ?></h2>

</div>

<div class="trailer">

    <div class="d-flex flex-column">
        <div class="p-2">
            <iframe src="<?= $stream['video_url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

</div>

<div class="release-date">

    <p>Durée : <?= $stream['duration']; ?></p>

</div>

<div class="summary">

    <p><?= $stream['summary']; ?></p>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>
