<?php
function partial($partialName, $variables = []) {
 require __DIR__.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR.$partialName.'.php';
}
?>
<html class="in-progress">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    
<!--TODO-->
<!--    <link rel="stylesheet" href="dist/styles/test_mode.css"/>-->
	<link rel="stylesheet" href="dist/styles/main.css"/>

    <?php partial('head/fonts'); ?>
</head>
<body>
	<header id="header" class="header row container">
		<?php partial('components/logo'); ?>
        <?php partial('components/menu'); ?>
	</header>
	<section id="section-hero" class="container position-relative">
        <img src="/images/bg-hero.png" />
        <div class="overlay justify-content-center">
            <h5 class="color-text-secondary">Healthy Habits Made Simple</h5>
	        <?php partial('title-h1', ['text' => 'The #1 app fitness & nutrition app']); ?>
            <div class="row">
		        <?php partial('button', ['text' => 'Get Started Now', 'color' => 'primary']); ?>
		        <?php partial('button', ['text' => 'Learn More', 'color' => 'outline']); ?>
            </div>
        </div>
	</section>
	<section id="section-courses" class="container">
        <div class="row justify-content-center">
            <?php partial('components/card-course', ['title' => 'Fitness', 'description' => 'Push your limits', 'imageURL' => '/images/course-1.png']); ?>
            <?php partial('components/card-course', ['title' => 'Aerobic', 'description' => 'Look good, feel good', 'imageURL' => '/images/course-2.png']); ?>
            <?php partial('components/card-course', ['title' => 'Power Lifting', 'description' => 'Get fit quickly', 'imageURL' => '/images/course-3.png']); ?>
        </div>
        <?php partial('components/testimonial', [
            'blockquote'    => 'Brute animals are the most healthy, and they are exposed to all weather, and of men, those are healthiest who are the most exposed.',
            'name'          => 'John Doe',
            'location'      => 'Los Angeles'
        ]); ?>
	</section>
	<section id="section-playlists" class="container">
        <h5 class="color-text-dark">Featured Playlists</h5>
        <div class="row justify-content-center">
            <?php
            $playlists  = [
	            ['title' => 'Full Body Training', 'imageURL' => '/images/playlist-1.png'],
	            ['title' => 'Back, Arms & Chest', 'equipment' => 'Weights', 'imageURL' => '/images/playlist-2.png'],
	            ['title' => 'Let\'s Train Together', 'imageURL' => '/images/playlist-3.png']
            ];
            foreach ($playlists as $playlist) {
	            partial('components/card-playlist', $playlist);
            }
            ?>
        </div>
	</section>
	<section id="section-getting-started" class="container text-center position-relative">
        <img src="/images/bg-getting-started.png" />
        <div class="overlay justify-content-center">
            <h5 class="color-text-tertiary">Tune up your workouts</h5>
	        <?php partial('title-h1', ['text' => 'Start your training now']); ?>
	        <div><?php partial('button', ['text' => 'Get Started', 'color' => 'primary']); ?></div>
        </div>
    </section>
	<footer class="container text-center">
		<?php partial('copyright'); ?>
	</footer>
</body>
</html>
