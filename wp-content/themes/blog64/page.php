<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blog64
 */

get_header(); ?>

<section class="innerpage section-spacing">
	
	<div class="row">
		<div class="container">

			<?php
			  	$class = 'col-md-12';
			  	$sidebar =  get_theme_mod('single_page_sidebar_position');
			   		if($sidebar != 'none'){
			      	$class = 'col-md-9';
			  	}
			?>          
			  
			<?php
			  if ($sidebar == 'left'){			     
			      	get_sidebar('left');
			    }
			?>

			<div class="<?php echo $class;?> detail-content">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>	
				<?php endwhile; // End of the loop. ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
				
			</div><!-- detail-content -->	

			<?php  if ($sidebar == 'right'){             
			  	get_sidebar('right');            
			  	}
			?>

		</div>
	</div>
</section>
<?php get_footer(); ?>