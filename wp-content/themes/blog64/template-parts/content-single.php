<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blog64
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
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

		<div class="detail-image">
		    <?php if (has_post_thumbnail()) : ?>
		        <?php the_post_thumbnail('full'); ?>
		        <?php else : ?>
		        <img src="<?php echo esc_url( get_template_directory_uri());?>/images/no-thumbnail.jpg ?> )" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" class="img-responsive" />
		    <?php endif; ?> 

		    <div class="detail-date">
		        <div class="month-day"><?php echo get_the_date('d M');?></div>
		        <div class="year"><?php echo get_the_date('Y');?></div>
		    </div>			      
		</div> <!-- /.end of detail-image -->			

		<?php the_content(); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blog64' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php blog64_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->


<?php 
    $show_authorinfo_in_post = get_theme_mod('blog64_authorinfo_display' );
    if ( $show_authorinfo_in_post) {?>
	<div class="author">
		<div class="general-info col-md-5 col-sm-5">
			<h2><i class="fa fa-user"></i> About Author</h2>
			<div class="img-responsive pull-left">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
			</div>
				
	        <div class="short-info">
	    		<strong><?php echo get_the_author_meta( 'display_name'); ?></strong><br>
	    		<?php the_author_meta('url'); ?><br>
	   			<?php echo get_the_author_meta('email'); ?> 
	  		</div>
		</div>

		<div class="details col-md-7 col-sm-7">              
			<p> <?php echo get_the_author_meta( 'description'); ?> </p>
		</div>
	</div>  <!-- /.end of author -->		
<?php }?> 


<?php 
    $show_postnav_in_post = get_theme_mod('blog64_postnavi_display' );
    if ( $show_postnav_in_post) {?>
	<div class="col-sm-12"> 
		<nav>
	  		<ul class="paging-navigation">
	    		<li>
	       			<?php the_post_navigation(); ?>  
	    		</li>
	  		</ul>
		</nav>
	</div> <!-- /.end of col 12 -->
<?php }?> 