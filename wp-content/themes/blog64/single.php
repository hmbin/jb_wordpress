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
	
	<div class="row">
		<div class="container">
			<?php
			  	$class = 'col-md-12';
			  	$sidebar =  get_theme_mod('single_post_sidebar_position');
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

					<?php get_template_part( 'template-parts/content', 'single' ); ?>				

				<?php endwhile; // End of the loop. ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
				
			</div><!-- /.end of deatil-content -->

			<?php  if ($sidebar == 'right'){ 
			  		get_sidebar('right');            
			  	}
			?>

		</div>
	</div>
</section>
<?php get_footer(); ?>