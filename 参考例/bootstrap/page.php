<?php get_header(); ?>
<!-- メインイメージ -->
<div class="main-img">
<img src="<?php echo get_template_directory_uri(); ?>/images/room.jpg" class="img-fluid mx-auto d-block" alt="">
</div>
<div class="main">
<!-- パンくずリスト -->
<?php get_template_part('breadcrumb'); ?>
<!-- パンくずリスト終了 -->
 <?php  if (have_posts()): 
      while (have_posts()) : the_post(); ?> 
      <h1><?php the_title(); ?></h1>
        <?php the_content(); 
      endwhile; 
     endif; ?>
</div>
<!-- コンテンツ終了 -->
<?php get_footer(); ?>