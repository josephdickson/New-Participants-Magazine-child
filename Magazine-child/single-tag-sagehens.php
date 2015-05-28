<?php
/**
 * The template for displaying all single posts.
 *
 * @package magazine
 */

get_header('single'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="article-begin">

				<div class="columns">
				<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'acf/acf' , 'gallery-alternate' ); ?>
					<div class="small-16 medium-15 large-14 small-centered columns">
						<?php get_template_part( 'template-parts/content', 'single-alternate' ); ?>

						<?php get_template_part( 'acf/acf' , 'slideshow' ); ?>

						<?php get_template_part( 'acf/acf', 'flexible-fields' ); ?>

						<?php // the_post_navigation(); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>
					</div>

					<?php endwhile; // end of the loop. ?>
					<div class="small-16 medium-15 large-10 small-centered columns">

						<?php get_template_part('template-parts/social', 'sharing-buttons'); ?>

						<?php get_template_part( 'template-parts/loop', 'tiles' ); ?>
					</div>
				</div>
			</div><!-- .row -->
		</main><!-- #main -->
	</div><!-- #primary -->

<div class="row">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
<?php get_template_part('template-parts/social', 'sharing-js'); ?>
