<div class="card playlist <?= $variables['cssClasses']; ?> text-center animate fade-in-from-bottom">
	<div class="image-container">
        <img class="position-relative" src="<?= $variables['imageURL']; ?>" alt="Playlist Card: <?= $variables['title']; ?>"/>
    </div>
	<h4 class="color-text-dark"><?= $variables['title']; ?></h4>
	<h6 class="color-text-primary">
        <?php
        if($variables['equipment']):
            echo 'Equipment: '.$variables['equipment'];
        else:
            echo 'No Equipment';
        endif;
        ?>
    </h6>
</div>
