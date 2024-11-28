<?php

namespace Elementor;

if (!defined('ABSPATH')) {
	exit;
}

$settings = $this->get_settings();
?>
<style>
	.pt-testimonial-style-2 {}
	.pt-testimonial-style-2 .pt-testimonial-box { padding: 12px; border-radius: 8px; backdrop-filter: blur(20); background-color: #ffffff70; }
</style>
<div class="pt-testimonial pt-testimonial-style-2">
	<div class="pt-testimonial-box pt-style-2">
		<div class="pt-testimonial-content">
			<h3><?= esc_html($settings['title']); ?></h3>
		</div>
	</div>
</div>