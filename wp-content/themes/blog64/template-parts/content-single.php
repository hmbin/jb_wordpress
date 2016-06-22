<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blog64
 */

?>

<div class="company_right">
  <div class="company_content">

		<h3 class="company_group top20">
			<?php the_title( '<span class="left">', '</span>' ); ?>
			<span class="news_xxrq"><?php echo get_the_date();?></span>
		</h3>
		<p class="top20"></p>
 
		<?php the_content(); ?>

	</div>
</div>

