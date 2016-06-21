<?php 
//list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)
$show_option_all = '';
$taxonomy     = 'category';
$orderby      = 'name'; 
$show_count   = 0;      // 1 for yes, 0 for no
$pad_counts   = 0;      // 1 for yes, 0 for no
$hierarchical = 1;      // 1 for yes, 0 for no
$title        = '<h2 class="title"><p>产品介绍<span>PRODUCT</span></p></h2>';
$hide_empty   = 0;
$child_of     = 6;
 
$args = array(
  'show_option_all'     => $show_option_all,
  'taxonomy'     => $taxonomy,
  'orderby'      => $orderby,
  'show_count'   => $show_count,
  'pad_counts'   => $pad_counts,
  'hierarchical' => $hierarchical,
  'title_li'     => $title,
  'hide_empty'   => $hide_empty,
  'child_of'     => $child_of
);
?>
<div class="custom-sidebar-left">
  <ul>
    <?php wp_list_categories( $args ); ?>
  </ul>
</div>

 
