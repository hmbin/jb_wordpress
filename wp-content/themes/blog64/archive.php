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
	<div class="container">
		<div class="row">
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
 			
 			
            <div class="<?php echo $class;?> clear-both"> 

				<?php if ( have_posts() ) : ?>
					<header class="page-header">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php
							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );
						?>
					<?php endwhile; ?>
					<div class="col-md-12 text-center">
						<?php echo the_posts_navigation(); ?>
					</div>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</div>

			<?php  if ($sidebar == 'right'){
                get_sidebar('right');            
                }
            ?>
        </div>
    </div>
</section>	
<?php get_footer(); ?>