<?php
/**
 * Sidebar setup for footer full.
 */

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>


	<div class="wrapper" id="wrapper-footer-full">

		<div class="container" id="footer-full-content" tabindex="-1">

			<div class="row">

				<?php dynamic_sidebar( 'footerfull' ); ?>

			</div>

		</div>

	</div><!-- #wrapper-footer-full -->

<?php endif; ?>
