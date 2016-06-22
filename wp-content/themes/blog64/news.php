<?php
/**
 * Template Name: news
 * The template used for displaying site frontpage page content in front-page.php
 *
 * @package blog64
 */
?>

<div class="company_right">
  <div class="company_content">
    <?php
      $html_code = do_shortcode("[include-page id='/news']");
      if($html_code){
        echo do_shortcode("[include-page id='/news']");
      }

    ?>

    <ul class="content_news top10">
      <?php $rand_posts = get_posts('numberposts=30&orderby=date&order=DESC');foreach($rand_posts as $post) : ?>    
        <li><span><?php echo get_the_date();?></span><a href="<?php the_permalink(); ?>"> <?php echo mb_strimwidth(get_the_title(), 0, 68); ?></a></li>    
      <?php endforeach;?> 
    </ul>

  </div>
</div>
 
