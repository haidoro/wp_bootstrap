<?php get_header(); ?>
index
<div class="main">
 <?php  if (have_posts()): 
      while (have_posts()) : the_post(); ?> 
      <h1><?php the_title(); ?></h1>
        <?php the_content(); 
      endwhile; 
     endif; ?>
</div>
<?php get_footer(); ?>