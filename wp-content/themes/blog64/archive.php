<?php
/**
 * Template Name: archive
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blog64
 */

get_header(); ?>

<section class="blogpage section-spacing">

  <!-- <div class="company_banner"></div> -->
	<div class="container">

		<div class="custom-content">
			<?php
                $class = 'col-md-12';
                $sidebar =  get_theme_mod('sidebar_position');
                if($sidebar != 'none'){
                	$class = 'col-md-9';
                }
            ?>          
            
            <?php
                if ($sidebar == 'left'){                   
                    get_sidebar('left');
                   }
            ?>
 			
            <?php include (TEMPLATEPATH . '/custom_category.php'); ?>

              <?php 
                $c_url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                if(strpos($c_url,"/news")){
                  include (TEMPLATEPATH . '/news.php');
                }else{
                  include (TEMPLATEPATH . '/profile.php'); 
                }
              ?>


			<?php  if ($sidebar == 'right'){
                get_sidebar('right');            
                }
            ?>

            
        </div>
    </div>
</section>	
<?php get_footer(); ?>