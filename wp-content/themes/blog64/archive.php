<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blog64
 */

get_header(); ?>

<section class="blogpage section-spacing">
  <div class="company_banner"></div>
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
 			

              <?php include (TEMPLATEPATH . '/profile.php'); ?>


			<?php  if ($sidebar == 'right'){
                get_sidebar('right');            
                }
            ?>

            
        </div>
    </div>
</section>	
<?php get_footer(); ?>