<?php 
	$flag_middle = get_field('flag_middle_repeated', 'option'); 
	$flag = get_field('flag', 'option');

?>

<div class="small-16 columns">

<?php
// The Query : Set limiter in WP_Query below
$the_query = new WP_Query($posts);

	echo '<ul class="small-block-grid-1 large-block-grid-4">'; ?>


	<li class="panel features-box hide-for-small hide-for-medium right">
		<?php // Requires ACF -- Pulls Homepage Index Box content from the Options page
		if (function_exists('get_field')){
			the_field('features-index-box', 'option');
		}

		?>
	</li>

<?php // The Loop
while ( $the_query->have_posts() ) {
	$the_query->the_post();

		echo '<li><a href="' . get_permalink() . '"><div class="panel">';
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('large');
			
			echo the_tags( '<div class="flag" style="background-image:url(' . $flag['url'] . ');">', ', ', '</div>');
			echo $tag-> name ;
			echo '<a href="' . get_permalink() . '"><h1>' . get_the_title() . '</h1>';
			echo '<p>' . get_the_excerpt() . '<p></div></a></li>';
		}
		else {
			// do nothing
		}

}
	echo '</ul>';
wp_reset_postdata();
?>

</div>
