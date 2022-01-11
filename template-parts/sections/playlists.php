<section id="section-playlists">
	<div class="container">
		<h5 class="color-text-dark">Featured Playlists</h5>
		<div class="row justify-content-center">
            <div class="card-columns">
                <?php
                $playlists  = [
                    ['title' => 'Full Body Training'],
                    ['title' => 'Back, Arms & Chest', 'equipment' => 'Weights'],
                    ['title' => 'Let\'s Train Together']
                ];
                foreach ($playlists as $index => $playlist) {
                    $playlist['imageURL'] = '/images/playlist-'.($index+1).'.png';
                    $playlist['cssClasses'] = 'delay-'.$index;
                    partial('components/card-playlist', $playlist);
                }
                ?>
            </div>
		</div>
	</div>
</section>
