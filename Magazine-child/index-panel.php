<?php
// The Query : Set limiter in WP_Query below
$the_query = new WP_Query($posts);

	echo '<ul class="small-block-grid-1 large-block-grid-1">'; 
?>
<li class="panel features-box hide-for-small hide-for-medium right">
<?php // Requires ACF -- Pulls Homepage Index Box content from the Options page
	if (function_exists('get_field')){
	the_field('features-index-box', 'option');
	}
?>
</li>

<?php
	echo '</ul>';
?> 
