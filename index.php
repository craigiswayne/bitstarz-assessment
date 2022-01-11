<?php
function partial($partialName, $variables = []) {
 require __DIR__.DIRECTORY_SEPARATOR.'template-parts'.DIRECTORY_SEPARATOR.$partialName.'.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BitStarz Assessment</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="BitStarz Assessment" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    
	<link rel="stylesheet" href="dist/styles/main.css"/>
    <script async src="/src/scripts/main.js"></script>
    <?php partial('head/fonts'); ?>
</head>
<body>
    <?php partial('header'); ?>
    <main>
        <?php
            partial('sections/hero');
            partial('sections/courses');
            partial('sections/playlists');
            partial('sections/subscribe');
        ?>
    </main>
    <?php partial('footer'); ?>
    <?php partial('components/subscribe-modal'); ?>
</body>
</html>
