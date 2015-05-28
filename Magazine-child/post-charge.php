<?php 
	$flag_middle = get_field('flag_middle_repeated', 'option'); 
	$flag = get_field('flag', 'option');

?>

<?php
// The Query : Set limiter in WP_Query below
$the_query = new WP_Query('category_name=charge');

// The Loop
while ( $the_query->have_posts() ) {
	$the_query->the_post();

		echo '<a href="http://pitweb.pitzer.edu/the-new-participants/charge-to-the-class-of-2015/">';
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('full');
			echo '</a>';
		}
		else {
			// do nothing
		}
}

wp_reset_postdata();
?>
