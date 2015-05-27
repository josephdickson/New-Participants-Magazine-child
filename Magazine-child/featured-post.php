<?php
// The Query : Set limiter in WP_Query below
$the_query = new WP_Query('category_name=featured');

// The Loop
while ( $the_query->have_posts() ) {
	$the_query->the_post();

			if ( has_post_thumbnail() ) {
			the_post_thumbnail('full');

		}
		else {
			// do nothing
		}

}

wp_reset_postdata();

?>
