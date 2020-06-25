<?php ob_start(); ?>

    <div class="title">
        <h2>Historique</h2>
    </div>
    <div class="d-flex flex-row-reverse">
        <div class="p-2">
            <button type="submit" class="btn bg-red text-light">Supprimer mon historique</button>
        </div>
    </div>



    <div class="media-list">
        <?php foreach( $history as $media ): ?>
        <a class="item" href="index.php?media=<?= $media[0]; ?>&type=<?= $media['type']; ?>">
            <div class="video">
                <div>
                    <iframe src="<?= $media['trailer_url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="title"><?= $media['title']; ?></div>
            <div class="d-flex justify-content-center">
                <div class="p-2">
                    <button id="<?= $media['id']; ?>" type="submit" class="btn bg-red text-light">Supprimer l'élément</button>
                </div>
            </div>
        </a>



        <?php endforeach; ?>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>