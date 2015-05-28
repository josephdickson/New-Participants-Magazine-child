<?php 

$post = $wp_query->post;
			if ( has_tag( 'video' )) {
				get_template_part('single-tag-video'); } 

			else if ( has_tag( 'sagehens' )) {
				get_template_part('single-tag-sagehens'); } 

			else if ( has_tag( '2015-commencement-photo-gallery' )) {
				get_template_part('single-tag-2015-commencement-photo-gallery'); } 

			else { 
				get_template_part('single-default'); 
			}

?>
