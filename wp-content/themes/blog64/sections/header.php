<?php if( is_front_page() ) : ?>
        <?php echo do_shortcode("[huge_it_slider id='1']"); ?>
 	<?php elseif( is_single() && has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail('blog64-header-full', array('class' =>'img-responsive')); ?>
 	<?php elseif ( get_header_image() ) : ?>
        <img src="<?php header_image(); ?>" class="img-responsive" />
<?php endif; ?>


<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container header custom-header">
		<div class="row logo"> 
			<div class="col-sm-3">				

                <?php if (function_exists('the_custom_logo')) : ?>	                            
                    <?php echo '<div class="site-logo">'; ?>
	    				<?php the_custom_logo(); ?>
	    			<?php echo '</div>'; ?>    
                <?php endif; ?>

                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div> 

			<!--navigation-->
  			<div class="col-sm-9 sticky-header sticky-dark">
		  		<nav class="navbar navbar-default">
	    			<div class="theme-nav pull-right">
	    				<div class="navbar navbar-default" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							      	<span class="sr-only"><?php _e('Toggle navigation','blog64'); ?></span>
							      	<span class="icon-bar"></span>
							      	<span class="icon-bar"></span>
							      	<span class="icon-bar"></span>
								</button>
							</div>							

							<div class="navbar-collapse collapse"> 
		                        <?php
						            wp_nav_menu( array(
						                'menu'              => 'primary',
						                'theme_location'    => 'primary',
						                'depth'             => 4,
						                'container'         => 'div',
						                'container_class'   => 'collapse navbar-collapse',
						        		'container_id'      => 'bs-example-navbar-collapse-1',
						                'menu_class'        => 'nav navbar-nav',
						                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						                'walker'            => new wp_bootstrap_navwalker())
						            );
						        ?>
						    </div>
		                </div>      			
		    		</div>
		  		</nav> <!--navigation end-->			  			  	
			</div>
		</div> 
	</div>
</nav>


<!--welcome message--> 
<?php if( is_front_page() ) : ?> 
	<section class="container text-center welcome-message">
		<?php 
	        $show_header_section_in_homepage = get_theme_mod('blog64_header_display' );
	        if ( $show_header_section_in_homepage) {?>
			<div class="row">
				<div class="col-md-12">
					<h1><?php echo esc_attr(get_theme_mod( 'blog64_heading', __( 'Startup Landing Page For Your Blog', 'blog64' ) ) ); ?></h1>
					<h2><?php echo esc_attr(get_theme_mod( 'blog64_subheading', __( 'Perfect and awesome theme to present your posts and pages.', 'blog64' ) ) ); ?></h2>

					<div class="play-btn"></div>
					<div class="cta-btn">
						<a href="<?php echo esc_url(get_theme_mod( 'blog64_button', '' )); ?>" class="btn btn-primary" title=""><?php _e('GET STARTED', 'blog64'); ?></a>
					</div>
				</div>
			</div>
			<?php }?>
	</section> <!--welcome message end-->  		 
<?php endif; ?> 		 