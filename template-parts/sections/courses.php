<section id="section-courses">
	<div class="container">
		<div class="card-columns row justify-content-center">
            <?php
            $courses = [
	            ['title' => 'Fitness', 'description' => 'Push your limits', 'imageURL' => '/images/course-1.png'],
	            ['title' => 'Aerobic', 'description' => 'Look good, feel good', 'imageURL' => '/images/subscribe-form-image.png'],
	            ['title' => 'Power Lifting', 'description' => 'Get fit quickly', 'imageURL' => '/images/course-3.png']
            ];
            
            foreach($courses as $index => $course) {
                $course['cssClasses'] = "delay-${index}";
	            partial('components/card-course', $course);
            }
            ?>
		</div>
		<?php partial('components/testimonial', [
			'blockquote'    => 'Brute animals are the most healthy, and they are exposed to all weather, and of men, those are healthiest who are the most exposed.',
			'name'          => 'John Doe',
			'imageURL'      => '/images/testimonial.png',
			'location'      => 'Los Angeles'
		]); ?>
	</div>
</section>
