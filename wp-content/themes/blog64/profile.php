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
    	$c_url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

		global $wp_query;
	    $cat_ID = get_query_var('cat');
	    $category = get_category($cat_ID);
	    $cat_slug =  $category->slug;

	    if(strpos($c_url,"/consult")){
	    	echo do_shortcode("[include-page id='consult']");
	    }else{
	    	//echo "aa".strpos($c_url,"/advisory");
		    $html_code = do_shortcode("[include-page id='".$cat_slug."']");
		    if($html_code){
		    	echo do_shortcode("[include-page id='".$cat_slug."']");
		    }else{
		    	header("Location:product/"); 
		    }
	    }
	    
    	
	?>

  </div>
</div>