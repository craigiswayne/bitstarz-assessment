<section id="section-playlists">
	<div class="container">
		<h5 class="color-text-dark">Featured Playlists</h5>
		<div class="row justify-content-center">
            <div class="card-columns">
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
		</div>
	</div>
</section>
