<?php ob_start(); ?>

<?php //foreach( $media as $media1 ): ?>
    <div class="trailer">

        <iframe allowfullscreen="" frameborder="0" src="<?= $media['trailer_url']; ?>" ></iframe>

    </div>

    <div class="release-date">

        <p>Date de sortie : <?= $media['release_date']; ?></p>

    </div>

    <div class="summary">

        <p><?= $media['summary']; ?></p>

    </div>
<?php// endforeach; ?>


<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>
