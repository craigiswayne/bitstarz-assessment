<nav class="menu row">
    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="cta toggle">
        <path d="M4 29.3334H36.5" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M4 20H36.5" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M20.25 10.6667L36.25 10.6667" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <ul>
		<li>
            <h6><a href="#">Home</a></h6>
		</li>
		<li>
			<h6><a href="#">Services</a></h6>
		</li>
		<li>
			<h6><a href="#">About</a></h6>
		</li>
		<li>
			<h6><a href="#">Contact</a></h6>
		</li>
		<li>
			<?php partial('components/button', ['text' => 'Get Started Now', 'color' => 'primary', 'size' => 'small', 'cssClasses' => 'launch-modal']); ?>
		</li>
	</ul>
</nav>
