<?php
global $gp_api_key;
$gp_api_key = 'AIzaSyD5ch865BgnV1Dg0Gr6mbPH3_sxMTgWgSo';

if( isset($_GET['find_location']) && $_GET['find_location'] != '' ){
	add_filter( 'template_include', 'portfolio_page_template', 99 );
}
function portfolio_page_template( $template ) {
	
	if( isset($_GET['find_location']) && $_GET['find_location'] != '' ){
		
		$new_template = locate_template( array( 'find_location.php' ) );
		if ( '' != $new_template ) {
			return $new_template ;
		}
	}
	
	return $template;
}
?>