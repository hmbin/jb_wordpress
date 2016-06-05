<!--site-footer-->
<footer class="site-footer section-spacing text-center">
  	<div class="container">
    	<div class="row">	      		
    		
        	<?php
        		if ( is_active_sidebar( 'footer-blocks' ) ) : 
					dynamic_sidebar( 'footer-blocks' );  
				endif; 
        	?>
        	<hr>

        	<div class="col-md-9 col-sm-12 text-left"> 
        		<small><?php echo esc_attr(get_theme_mod( 'copyright_textbox', __( '', 'blog64' ) ) ); ?>
        			<span class="sep"> | </span>
                    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'blog64' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'blog64' ), 'WordPress' ); ?></a>
                    <span class="sep"> | </span>
                    <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'blog64' ), 'blog64', '<a href="'.esc_url( __( 'http://sumanshresthaa.com.np', 'blog64' ) ).'" rel="designer">Suman Shrestha</a>' ); ?></small>
      		</div>	        	
	      		
      		<div class="col-md-3 col-sm-12"> 
        		<?php 
		        $show_social_in_footer = get_theme_mod('blog64_socialicon_display' );
		        if ( $show_social_in_footer) {?>

	            <div class="social-icon text-right center-xs">
	                <ul class="list-inline">
	                   	<?php 
	                   	$facebook =  esc_url(get_theme_mod('facebook_textbox'));
                        $twitter = esc_url(get_theme_mod('twitter_textbox'));
                        $googleplus = esc_url(get_theme_mod('googleplus_textbox'));
                        $youtube = esc_url(get_theme_mod('youtube_textbox'));
                        $linkedin = esc_url(get_theme_mod('linkedin_textbox'));                      	
	    
	                    if($facebook){?>
	                        <li><a href="<?php echo $facebook;?>"><i class="fa fa-facebook"></i></a></li>
	                    <?php }
	                    if($twitter){?>
	                        <li><a href="<?php echo $twitter;?>"><i class="fa fa-twitter"></i></a></li>
	                    <?php }
	                    if($googleplus) {?>
	                        <li><a href="<?php echo $googleplus;?>"><i class="fa fa-google-plus"></i></a></li>
	                    <?php }
	                    if($youtube){?>
	                        <li><a href="<?php echo $youtube;?>"><i class="fa fa-youtube-play"></i></a></li>
	                    <?php }
	                    if($linkedin){?>
	                        <li><a href="<?php echo $linkedin;?>"><i class="fa fa-linkedin"></i></a></li>
	                	<?php }?>
	          		</ul>         
	        	</div> <!-- /.end of social icon -->
            	<?php }?>
	      	</div>      		

	    </div>
	</div>
</footer>
<!--site-footer end--> 