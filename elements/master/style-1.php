<?php

namespace Elementor;

if (!defined('ABSPATH')) {
	exit;
}

$settings = $this->get_settings();
?>

<div class="hr-company-statics section">

	<div class="hr-company-statics-wrap">

		<?php if(have_rows('company_stactics','option')) { ?>
		<div class="row">
			<?php while(have_rows('company_stactics','option')) {
	the_row(); ?>
			<div class="column">
				<div class="statics-box">
					<div class="icon">
						<?php echo get_sub_field('icon'); ?>	
					</div>

					<div class="statics-content">
						<h3> <?php echo get_sub_field('name'); ?> </h3>
						<p> <?php echo get_sub_field('number'); ?> </p>
					</div>
				</div>
			</div>

			<?php } ?>
		</div>
		<?php } ?>

	</div>

</div>