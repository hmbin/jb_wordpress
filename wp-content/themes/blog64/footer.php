<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blog64
 */

?>	
	<?php get_template_part( 'sections/footer' ); ?>
	
	<!-- Tab to top scrolling -->
	<div class="scroll-top-wrapper"> 
      	<span class="scroll-top-inner">
        	<i class="fa fa-2x fa-angle-double-up"></i>
      	</span>
	</div> 	
	<?php wp_footer(); ?>

</body>
</html>
