<?php /* Template Name:事業案内*/ ?>
<?php get_header(); ?>
<!-- メインイメージ -->
<div class="main-img">
<img src="<?php echo get_template_directory_uri(); ?>/images/room.jpg" class="img-fluid mx-auto d-block" alt="">
</div>
<!-- パンくずリスト -->
<div class="main">
<?php get_template_part('breadcrumb'); ?>
<!-- パンくずリスト終了 -->
 <?php  if (have_posts()): 
      while (have_posts()) : the_post(); ?> 
      <h1><?php the_title(); ?></h1>
        <?php the_content(); 
      endwhile; 
     endif; ?>
</div>
<aside>
<div class="side">
<?php get_sidebar('business'); ?>
</div>
</aside>
<?php $args = array(
            'numberposts' => 1,                //表示（取得）する記事の数
            'post_type' => 'AI'    //投稿タイプの指定
        );
        $customPosts = get_posts($args);
        if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post ); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="taxonomies">
                <?php echo  get_the_term_list( $post->ID, 'AIcat', '分類', ', ', '' );?>
            </p>
            <div class="custom-post-content">
                <?php the_content();?>
            </div>
        <?php endforeach; ?>
        <?php endif;
        wp_reset_postdata(); //クエリのリセット ?>
<!-- コンテンツ終了 -->
<?php get_footer(); ?>