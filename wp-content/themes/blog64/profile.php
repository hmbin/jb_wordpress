<?php
/**
 * Template Name: profile
 * The template used for displaying site frontpage page content in front-page.php
 *
 * @package blog64
 */
?>

<div class="company_banner"></div>
<div class="custom-content-right">
  <?php if( is_front_page() ) : ?>
    <?php echo do_shortcode("[include-page id='/content_right']"); ?>
  <?php endif; ?>  
</div>