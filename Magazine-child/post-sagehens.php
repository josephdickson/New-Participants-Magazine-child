<?php 
	$flag_middle = get_field('flag_middle_repeated', 'option'); 
	$flag = get_field('flag', 'option');

?>

<?php
// The Query : Set limiter in WP_Query below
$the_query = new WP_Query('category_name=sagehens');

// The Loop
while ( $the_query->have_posts() ) {
	$the_query->the_post();

		echo '<li><div class="panel"><a href="' . get_permalink() . '">';
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('full');
			echo '</a>';
			echo the_tags( '<div class="flag" style="background-image:url(' . $flag['url'] . ');">', ', ', '</div>');
		}
		else {
			// do nothing
		}
	echo '<a href="' . get_permalink() . '"><h1>' . get_the_title() . '</a></h1>';
	echo '<p>' . get_the_excerpt() . '</p></a></div></li>';
}

wp_reset_postdata();
?>
