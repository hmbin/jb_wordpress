<?php
/**
 * Template Name: Frontpage
 * The template used for displaying site frontpage page content in front-page.php
 *
 * @package blog64
 */
get_header(); ?>


<!--Blogs-->
<section class="homepage section-spacing text-center" id="blog">
  	<div class="container">

    	<header class="section-header">
      		<h2><?php _e('Latest Blogs to Read','blog64') ?></h2>
          <div class="text-center black"><hr></div>
      		<h3><?php _e('Read some of my awesome blog to let me know that I am doing something good to this community.','blog64') ?></h3>
    	</header>

    	<div class="row">
    		<?php
  				$cid = get_theme_mod('blog_category_display');
  				$category_link = get_category_link($cid);
  				$blog64_cat = get_category($cid);
  				if ($blog64_cat) {
    		?>

    		<?php
              $args = array(
                'posts_per_page' => 6,
                'paged' => 1,
                'cat' => $cid
              );
              $loop = new WP_Query($args);              
              $cn = 0;
              if ($loop->have_posts()) :  while ($loop->have_posts()) : $loop->the_post();$cn++;
          ?>
      		<div class="col-xs-12 col-sm-4">
        		<div class="blog-details">
        			<figure>
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('figure-thumb'); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/no-thumbnail.jpg" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" class="img-responsive" />
                <?php endif; ?> 
          				
          			<figcaption>
            				<div>    
                      <?php the_excerpt();?>
            				</div>
          			</figcaption>
        			</figure> <!--figure end--> 
        			<div class="blog-info">
          			<h4><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
        			</div>
      		  </div> <!--blog-details end--> 
      	  </div>  <!--col-sm-4 end--> 

      	  <?php                 
    		    endwhile;    		    
    				  wp_reset_postdata();  
    			  endif;                             
  				  }
  			  ?>          
    	</div> <!--row end--> 
  	</div> <!--container end--> 
</section> <!--section end-->
<?php get_footer();?>