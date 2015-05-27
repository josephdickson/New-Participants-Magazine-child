<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package magazine
 */
get_header(); ?>
<!-- category-video.php -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="article-begin">
			<h1 class="entry-title">Commencement Videos</h1>
				<div class="small-16 medium-15 large-12 small-centered columns">
					<?php 
						$flag_middle = get_field('flag_middle_repeated', 'option'); 
						$flag = get_field('flag', 'option');

					?>

					<?php
					// The Query : Set limiter in WP_Query below
					$the_query = new WP_Query('category_name=video');
				 	echo '<ul class="small-block-grid-1 large-block-grid-3">';
					// The Loop
					while ( $the_query->have_posts() ) {
						$the_query->the_post();

							echo '<li><div class="panel"><a href="' . get_permalink() . '">';
								if ( has_post_thumbnail() ) {
								the_post_thumbnail('full');
								echo '</a>';
							}
							else {
								// do nothing
							}
						echo '<a href="' . get_permalink() . '"><h1>' . get_the_title() . '</a></h1>';
						echo '<p>' . get_the_excerpt() . '<p></a></div></li>';
					}
				 	echo '</ul>';
					wp_reset_postdata();
					?>					
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
