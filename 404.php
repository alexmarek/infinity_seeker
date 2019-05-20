<?php
/**
 * The template for displaying 404 pages (not found).

 */

get_header();


?>

<div class="wrapper" id="error-404-wrapper">

	<div class="<?php echo esc_attr( $container ); ?> container-fluid--boxed" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main">

					<section class="error-404 not-found">

						<header class="page-header">

							<div class="row">
								<div class="col-md-6">&nbsp;</div>
								<div class="col-md-6">
									<h1 class="page-title">PAGE NOT FOUND</h1>
									<a class="button button--black" href="/">
										Return to home page
									</a>
								</div>
							</div>

						</header><!-- .page-header -->

						<div class="page-content">


						</div><!-- .page-content -->

					</section><!-- .error-404 -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
