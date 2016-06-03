<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blog64
 */

?>

<div class="detail-content">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<a class="entrytitle" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</header><!-- .entry-header -->

		<div class="post-info">
			<p>
		    	<span class="pull-left info">
		          	<ul class="list-inline">
		            	<li><i class="fa fa-user"></i> <?php echo get_the_author_meta('display_name');?></li>
		            	<li><i class="fa fa-comments"></i>  <?php comments_popup_link('zero comment','one comment', '% comments');?></li>
		          	</ul>
		    	</span>
		    </p>
		</div> <!-- /.end of post-info -->

		<div class="entry-content">
			<div class="col-md-4 col-sm-12">
				<div class="detail-image">
				    <?php if (has_post_thumbnail()) : ?>
				        <?php the_post_thumbnail('blog-full'); ?>
				        <?php else : ?>
				        <img src="<?php echo esc_url( get_template_directory_uri());?>/images/no-thumbnail.jpg ?> )" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" class="img-responsive" />
				    <?php endif; ?> 

				    <div class="detail-date">
				        <div class="month-day"><?php echo get_the_date('d M');?></div>
				        <div class="year"><?php echo get_the_date('Y');?></div>
				    </div>			      
				</div> <!-- /.end of detail-image -->	
			</div>

			<div class="col-md-6 col-sm-12">
				<?php the_excerpt();?>
				<div class="entry-footer">
					<?php blog64_entry_footer(); ?>
				</div><!-- .entry-footer -->

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blog64' ),
						'after'  => '</div>',
					) );
				?>
			</div>
			
		</div><!-- .entry-content -->
		
	</article><!-- #post-## -->	
	
</div><!-- /.end of deatil-content -->
<hr>