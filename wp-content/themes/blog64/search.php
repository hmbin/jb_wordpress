<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package blog64
 */

get_header(); ?>

<section class="blogpage section-spacing">
	<div class="row">
		<div class="container">

			<?php
			  $class = 'col-md-12';
			  $sidebar =  get_theme_mod('search_page_sidebar_position');
			   if($sidebar != 'none'){
			      $class = 'col-md-9';
			  }
			?>          
			  
			<?php
			  if ($sidebar == 'left'){
			     
			      get_sidebar('left');
			     }
			?>

			<div class="<?php echo $class;?> detail-content searched">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'blog64' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );
						?>

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

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