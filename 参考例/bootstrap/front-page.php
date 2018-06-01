<?php get_header(); ?>
<!-- スライドショー -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/slide1.JPG" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/slide2.JPG" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/slide3.JPG" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- スライドショー終了 -->
<!-- news page -->
<section>
<h2>ニュース</h2>
<ul class="list-unstyled">
  <?php
  $myposts = get_posts('category_name=news&posts_per_page=5');
  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
	<li>
    <span class="date"><?php the_time('Y/m/d'); ?></span>
    <span class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
  </li>
	<?php endforeach;
  wp_reset_postdata();?>
</ul>
</section>
<!-- news page終了 -->
<!-- 事業案内 -->
<section>
 <?php
        $args = array(
         'include' => array(8)
         ); ?>
         <?php $my_posts = get_pages( $args ); ?>
         <?php
         foreach ( $my_posts as $post ) :
           setup_postdata( $post ); ?>
           <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
       <?php endforeach;?>
       <?php wp_reset_postdata(); ?>
<div class="row">
<?php
  $mypages = get_pages( array( 'post_type' => 'page','sort_order' => 'asc','child_of' => 8) );

  foreach( $mypages as $post ):setup_postdata($post); ?>
  <section class="col-md-4">
    <h3 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title() ; ?></a></h3>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail_top',
             array('alt' => the_title_attribute('echo=0'),
             'class' => 'img-fluid mx-auto d-block')); ?>
           </a>
    <p class="entry"><?php echo get_the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>">[詳細ページへ]</a></p>
    
  </section>
  <?php endforeach; ?>

</div>	
</section>
<!-- 事業案内終了 -->
<?php get_footer(); ?>