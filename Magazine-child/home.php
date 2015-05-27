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

					<div class="hide-for-small hide-for-medium large-4 columns">
						<?php get_template_part( 'index-panel' ); ?>
					</div>
					<?php 
					 	echo '<ul class="small-block-grid-1 large-block-grid-3">';
					?>
						<?php get_template_part( 'post-loop' ); ?>

						<?php get_template_part( 'video-loop' ); ?>

						<?php get_template_part( 'art-galleries-loop' ); ?>

					<?php 
					 	echo '</ul>';
					?>
				</div>
			</main><!-- #main -->
	</div><!-- #primary -->
    </section>
<?php get_footer(); ?>
