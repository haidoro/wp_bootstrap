<?php get_header(); ?>
<!-- メインイメージ -->
<div class="main-img">
<img src="<?php echo get_template_directory_uri(); ?>/images/room.jpg" class="img-fluid mx-auto d-block" alt="">
</div>
<!-- メインイメージ終了 -->
<!-- コンテンツ -->
<!-- パンくずリスト -->
<?php get_template_part('breadcrumb'); ?>
<!-- パンくずリスト終了 -->
<div class="main">
<h1><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></h1>
<article>
 <?php  if (have_posts()): 
      while (have_posts()) : the_post(); ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); 
      endwhile; 
     endif; ?>
</article>
</div>
<!-- コンテンツ終了 -->
<?php get_footer(); ?>