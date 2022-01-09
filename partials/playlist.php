<div class="component playlist">
	<img src="<?= $variables['imageURL']; ?>" />
	<div><?= $variables['title']; ?></div>
	<div>
        <?php
        if($variables['equipment']):
            echo 'Equipment: '.$variables['equipment'];
        else:
            echo 'No Equipment';
        endif;
        ?>
    </div>
</div>
