
<?php

$permalink = get_permalink();

$the_title = get_the_title();


ob_start();
the_author_posts_link();
$the_author_posts_link = ob_get_contents();
ob_end_clean();






$comments_number = do_shortcode('[post_comments_count post_id="'.get_the_ID().'" method="text"]');


$meta_values = get_post_custom(get_the_ID());


$cat_echo_p  = do_shortcode('[post_category post_id="'.get_the_ID().'"]');

$format = get_post_format();
$type = get_post_type(get_the_ID());

$GLOBALS['thumb-size'] = 'blog-post-thumb';


if($mutual_array['cat-counter'] == 1){
	$the_post_thumbnail = get_the_post_thumbnail(get_the_ID(),'3-col-cat');
	$data = $data . '<article class="blog-thumb style_cat clearfix"><div class="row-fluid margin-bottom-20"><div class="span6"><a href="' . $permalink . '">'.$the_post_thumbnail.'</a></div><div class="span6"><h2 class="clearfix blogtitle"><a class="title" href="' . $permalink . '">' . $the_title . '</a></h2>';

	
	
	include(get_template_directory() . '/library/includes/templates/meta-data.php');
	ob_start();
	the_excerpt_max_charlength(150);
	$the_excerpt_max_charlength = ob_get_contents();
	ob_end_clean();
	
	$data = $data . '<div class="clearfix"></div><p class="content-short"> ' . $the_excerpt_max_charlength . '</p></div></div></article>';
	

}elseif($mutual_array['cat-counter'] % 2 == 0) {
	
	$data = $data . '<div class="row-fluid margin-bottom-20"><div class="span6">';
	include(get_template_directory() . '/library/includes/templates/blog-style7.php');
	$data = $data . '</div>';
	
}else {
	$data = $data . '<div class="span6">';
	include(get_template_directory() . '/library/includes/templates/blog-style7.php');
	$data = $data . '</div></div>';
}


if($mutual_array['cat-counter'] == $mutual_array['cat-counter-total']){
	if($mutual_array['cat-counter-total'] % 2 == 0 ){
		$data = $data . '</div>';
	}
}


$mutual_array['cat-counter']++;
?>