<?php
/**
 * Sidebar-left template for compatibility with versions prior to 2.0.0
 *
 * @version     2.0.0
 */
?>

<?php if ($instance['before_posts']) : ?>
  <div class="upw-before">
    <?php echo wpautop($instance['before_posts']); ?>
  </div>
<?php endif; ?>


<ul>
<?php wp_list_categories('orderby=id&show_count=1&use_desc_for_title=0&child_of=6'); ?>
</ul>



<?php if ($upw_query->have_posts()) : ?>

  <ul>
<?php  printf(get_the_term_list()); ?>
  <?php while ($upw_query->have_posts()) : $upw_query->the_post(); ?>

    <?php $current_post = ($post->ID == $current_post_id && is_single()) ? 'current-post-item' : ''; ?>

    <li class="<?php echo ($post->ID == $current_post_id && is_single())?'current-post-item':'' ?>">

      <div class="upw-content">

        <?php if (get_the_title() && $instance['show_title']) : ?>
          <p class="post-title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
              <?php the_title(); ?>
            </a>
          </p>
        <?php endif; ?>

        <?php
        $categories = get_the_term_list($post->ID, 'category', '', ', ');

        if ($instance['show_cats'] && $categories) :
        ?>
          <p class="post-cats">
            <span class="post-cats-list"><?php echo $categories; ?></span>
          </p>
        <?php endif; ?>

      </div>

    </li>

  <?php endwhile; ?>
  
  </ul>






<?php else : ?>

  <p><?php _e('No posts found.', 'upw'); ?></p>

<?php endif; ?>

<?php if ($instance['after_posts']) : ?>
  <div class="upw-after">
    <?php echo wpautop($instance['after_posts']); ?>
  </div>
<?php endif; ?>