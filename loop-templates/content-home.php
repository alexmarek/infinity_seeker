<header class="entry-header">

	<div class="bg-video">

		<div class="bg-video__poster bg-video__poster--mobile" style="background-image: url(<?php  $image = get_field('page_header_image_mobile'); echo $image['url']; ?>)"></div>
		<div class="bg-video__poster bg-video__poster--desktop" style="background-image: url(<?php  $image = get_field('page_header_image'); echo $image['url']; ?>)"></div>

		<div class="container">
			<h1 class="bg-video__title"><?php the_field('header_title'); ?></h1>
			<a class="button home-slider__button" href="<?php the_field('header_button_link'); ?>"><?php the_field('header_button_text'); ?></a>	
		</div>
			
	</div>

</header>

<div class="row">
	<div class="container">
		<?php if( have_rows('section') ): while ( have_rows('section') ) : the_row(); ?>
		<div class="page-section">
			<?php 
				$image = get_sub_field('section_image');
				$image_mobile = get_sub_field('section_image_mobile');
				if (wp_is_mobile() && $image_mobile){
					$image = $image_mobile;
				}
				if($image):
			?>

			<?php if( get_sub_field('section_image_full_width') ): ?>
				<div class="page-section__image__bg home-imagebg" style="background-image: url(<?php echo $image['url'] ?>)"></div>
			<?php else: ?>
				<img class="u-margin-top-huge" src="<?php echo $image['url'] ?>" alt="<?php the_sub_field('section_link_text'); ?>">
			<?php  endif; endif ; ?>

			<?php if(get_sub_field('section_text')): ?>
				<h2 class="home-text"><?php the_sub_field('section_text'); ?></h2>
			<?php endif; ?>
			
			<?php if(get_sub_field('section_link_url')): ?>
				<a class="button u-margin-bottom-big u-margin-top-medium" href="<?php the_sub_field('section_link_url'); ?>" title="<?php the_sub_field('section_link_text'); ?>"><?php the_sub_field('section_link_text'); ?></a>
			<?php endif; ?>
		</div>
		<?php endwhile; endif;?>
	</div>
</div>

<div class="container home-taste u-margin-bottom-huge">
	<div class="row">
		<?php if( have_rows('taste_home_carousel') ): while ( have_rows('taste_home_carousel') ) : the_row(); ?>
			<a href="<?php the_sub_field("Taste_home_carousel_link") ?>" class="col-1-of-4">
				<div class="home-taste__item" style="background-image: url(<?php the_sub_field("Taste_home_carousel_image") ?>)"></div>	
				<h4 class="home-taste__item__subtitle"><?php the_sub_field("taste_home_carousel_subtitle") ?></h4>	
				<h2 class="home-taste__item__title"><?php the_sub_field("taste_home_carousel_title") ?></h2>
			</a>
		<?php endwhile; endif;?>
	</div>		
</div>

<div class="container u-margin-bottom-huge">
	<div class="row">
		<h5 class="col-1-of-6">PRESS:</h5>
		<div class="col-5-of-6 owl-carousel home-press-carousel">
			<?php if( have_rows('homepage_press_images') ): while ( have_rows('homepage_press_images') ) : the_row(); ?>
				<a href="<?php the_sub_field('homepage_press_link') ?>" target="_blank" rel="noreferrer noopener" title="Go to <?php the_sub_field('homepage_press_link') ?>">
					<img src="<?php the_sub_field('homepage_press_image') ?>" alt="Go to <?php the_sub_field('homepage_press_link') ?>" />
				</a>
			<?php endwhile; endif;?>
		</div>
	</div>
	<div class="row">
		<h5 class="col-1-of-6">PARTNERS:</h5>
		<div class="col-5-of-6 owl-carousel home-press-carousel">
			<?php if( have_rows('homepage_partners_images') ): while ( have_rows('homepage_partners_images') ) : the_row(); ?>
				<a href="<?php the_sub_field('homepage_press_link') ?>" target="_blank" rel="noreferrer noopener" title="Go to <?php the_sub_field('homepage_press_link') ?>">
					<img src="<?php the_sub_field('homepage_press_image') ?>" alt="Go to <?php the_sub_field('homepage_press_link') ?>" />
				</a>
			<?php endwhile; endif;?>
		</div>
	</div>
</div>
