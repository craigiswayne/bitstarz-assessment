<?php
function partial($partialName, $variables = []) {
 require __DIR__.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR.$partialName.'.php';
}
?>
<html class="in-progress">
<head>
	<link rel="stylesheet" href="dist/styles/main.css"/>
</head>
<body>
	<header id="header" class="component header row container">
		<div class="component logo">
            <div>IMAGE</div>
            <div>GetFit</div>
        </div>
        <nav class="component menu row">
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li>
	                <?php partial('button', ['text' => 'Get Started Now', 'color' => 'primary']); ?>
                </li>
            </ul>
        </nav>
	</header>
	<section id="section-hero" class="container">
        <div class="component subtitle">
            Healthy Habits Made Simple
        </div>
        <div class="component title">
            The #1 app fitness & nutrition app
        </div>
        <div class="row">
            <?php partial('button', ['text' => 'Get Started Now', 'color' => 'primary']); ?>
            <?php partial('button', ['text' => 'Learn More']); ?>
        </div>
	</section>
	<section id="section-courses" class="container">
        <div class="row justify-content-center">
            <?php partial('card-course', ['title' => 'Fitness', 'description' => 'Push your limits']); ?>
            <?php partial('card-course', ['title' => 'Aerobic', 'description' => 'Look good, feel good']); ?>
            <?php partial('card-course', ['title' => 'Power Lifting', 'description' => 'Get fit quickly']); ?>
        </div>
        <?php partial('testimonial', [
            'blockquote'    => 'Brute animals are the most healthy, and they are exposed to all weather, and of men, those are healthiest who are the most exposed.',
            'name'          => 'John Doe',
            'location'      => 'Los Angeles'
        ]); ?>
	</section>
	<section id="section-playlists" class="container">
        <div class="component">
            FEATURED PLAYLISTS
        </div>
        <div class="row justify-content-center">
            <?php
                partial('playlist', ['title' => 'Fitness']);
                partial('playlist', ['title' => 'Back, Arms & Chest', 'equipment' => 'Weights']);
                partial('playlist', ['title' => 'Let\'s Train Together']);
            ?>
        </div>
	</section>
	<section id="section-getting-started" class="container text-center">
		<?php partial('text-accent', ['text' => 'Tune up your workouts']); ?>
        <div class="component title">Start your training now</div>
		<?php partial('button', ['text' => 'Get Started', 'color' => 'primary']); ?>
    </section>
	<footer class="container text-center">
		<?php partial('copyright'); ?>
	</footer>
</body>
</html>
