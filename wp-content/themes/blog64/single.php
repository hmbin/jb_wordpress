<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

              <?php while ( have_posts() ) : the_post(); ?>

								<?php get_template_part( 'template-parts/content', 'single' ); ?>				

							<?php endwhile; // End of the loop. ?>


			<?php  if ($sidebar == 'right'){
                get_sidebar('right');            
                }
            ?>

            
        </div>
    </div>
</section>	
<?php get_footer(); ?>

