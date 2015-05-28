<?php 
	$flag_middle = get_field('flag_middle_repeated', 'option'); 
	$flag = get_field('flag', 'option');

?>

<?php
// The Query : Set limiter in WP_Query below
$args = array(
		
	'category_name' 	=> 'video',
	'posts_per_page'	=> 1,
);

$query = new WP_Query($args);

	
// The Loop
while ( $query->have_posts() ) {
	$query->the_post();

		echo '<li><div class="panel"><a href="' . get_category_link(10) . '">';
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('full');
			echo '</a>';
			echo '<div class="flag" style="background-image:url(' . $flag['url'] . ');">2015 Commencement Videos</div>';
		}
		else {
			// do nothing
		}

	echo '</div></li>';
}
wp_reset_postdata();
?>
