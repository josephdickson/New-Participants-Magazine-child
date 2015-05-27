<?php
// The Query : Set limiter in WP_Query below
$args = array(
		
	'tag' 	=> 'art-galleries',
	'posts_per_page'	=> 1,
);

$query = new WP_Query($args);

	
// The Loop
while ( $query->have_posts() ) {
	$query->the_post();

		echo '<li><div class="panel"><a href="http://www.pitzer.edu/galleries/" target="_blank">';
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('full');
			echo '</a>';
		}
		else {
			// do nothing
		}

	echo '</div></li>';
}
wp_reset_postdata();
?>
