<?php
/**
 * The home template file.
 *
 * This is the homepage template file in a WordPress theme, it generates the layout instead of index.php
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package magazine
 */

get_header('home'); ?>
    <section class="main-section">
	<!-- content goes here -->
	<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			<?php get_template_part('photo-main-index'); ?>
			<h3 class="blog-info"><?php echo bloginfo('description'); ?></h3>

				<div class="small-16 medium-15 large-12 small-centered columns">

					<div class="small-16 medium-15 large-12 columns featured-post">
						<?php get_template_part( 'featured-post' ); ?>
					</div>

					<div class="hide-for-small hide-for-medium large-4 columns charge">
						<?php get_template_part( 'index-panel' ); ?>
						<?php get_template_part( 'post-charge' ); ?>
					</div>

					<ul class="small-block-grid-1 large-block-grid-3">
						<?php get_template_part( 'post-loop' ); ?>
					</ul>

					<div class="small-16 medium-15 large-9 large-centered columns welcome">
						<ul class="small-block-grid-1">
							<?php get_template_part( 'post-welcome' );?>
						</ul>
					</div>

					<div class="clear"></div>


				<div class="large-centered columns large-14">

					<div class="small-16 medium-15 large-4 columns welcome">
						<ul class="small-block-grid-1">
							<?php get_template_part( 'post-stats' ); ?>
							<?php get_template_part( 'post-awards' );?>
						</ul>
					</div>

					<div class="small-16 medium-15 large-12 columns statistics">
						<ul class="small-block-grid-1">	
							<?php get_template_part( 'post-sagehens' ); ?>
						</ul>
					</div>
				</div>

					<ul class="small-block-grid-1 large-block-grid-3">
						<?php get_template_part( 'post-photo-gallery');?>

						<?php get_template_part( 'art-galleries-loop' ); ?>

						<?php get_template_part( 'video-loop' ); ?>
					</ul>

				</div>
			</main><!-- #main -->
	</div><!-- #primary -->
    </section>
<?php get_footer(); ?>
