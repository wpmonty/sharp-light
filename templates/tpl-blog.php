<?php
/*
	Template Name: Blog
*/

if ( get_query_var( 'paged') ) { 
	$paged = get_query_var( 'paged' );
}
elseif ( get_query_var( 'page') ) {
	$paged = get_query_var( 'page' ); 
}
else {
	$paged = 1;
}

query_posts( array ( 'post_type' => 'post', 'posts_per_page' => 3, 'paged' => $paged ) );

get_template_part('archive');