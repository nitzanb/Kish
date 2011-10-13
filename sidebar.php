<?php
	if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>

		<div id="sidebar" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'primary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>
