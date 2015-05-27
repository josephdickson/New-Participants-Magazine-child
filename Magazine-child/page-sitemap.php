<?php
/**
	Template Name: Site Map
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">



				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>


<?php
// The Query : Set limiter in WP_Query below
$the_query = new WP_Query($posts);

	echo '<ul class="small-block-grid-1 large-block-grid-3">';
// The Loop
while ( $the_query->have_posts() ) {
	$the_query->the_post();

		echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
			if ( has_post_thumbnail() ) {}
		else {
			// do nothing
		}
}
	echo '</ul>';
wp_reset_postdata();
?>


					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>


			</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<div class="row">
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
