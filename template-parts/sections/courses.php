<section id="section-courses">
	<div class="container">
		<div class="card-columns row justify-content-center">
			<?php partial('components/card-course', ['title' => 'Fitness', 'description' => 'Push your limits', 'imageURL' => '/images/course-1.png']); ?>
			<?php partial('components/card-course', ['title' => 'Aerobic', 'description' => 'Look good, feel good', 'imageURL' => '/images/course-2.png']); ?>
			<?php partial('components/card-course', ['title' => 'Power Lifting', 'description' => 'Get fit quickly', 'imageURL' => '/images/course-3.png']); ?>
		</div>
		<?php partial('components/testimonial', [
			'blockquote'    => 'Brute animals are the most healthy, and they are exposed to all weather, and of men, those are healthiest who are the most exposed.',
			'name'          => 'John Doe',
			'imageURL'      => '/images/testimonial.png',
			'location'      => 'Los Angeles'
		]); ?>
	</div>
</section>
