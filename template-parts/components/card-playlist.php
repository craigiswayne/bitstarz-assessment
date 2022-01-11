<div class="card playlist <?= $variables['cssClasses']; ?> text-center">
	<img src="<?= $variables['imageURL']; ?>" />
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
