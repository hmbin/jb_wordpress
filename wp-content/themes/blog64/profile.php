<?php
/**
 * Template Name: profile
 * The template used for displaying site frontpage page content in front-page.php
 *
 * @package blog64
 */
?>

<div class="company_right">
  <div class="company_content">
    <?php 
    	$t_url = '/profile';
    	$c_url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    	$h_url = site_url();
    	$c_length = strlen($c_url);
    	$h_length = strlen($h_url);
		if($c_length > $h_length){ 
			$t_url = substr($c_url,$h_length,$c_length); 
		} 

		global $wp_query;
	    $cat_ID = get_query_var('cat');
	    $category = get_category($cat_ID);
	    $cat_slug =  $category->slug;
	    //echo "string".$cat_slug;
    	echo do_shortcode("[include-page id='".$cat_slug."']");
	?>
  </div>
</div>