<?php get_header(); ?>
<div class="alert alert-warning" role="alert">
  <h4 class="alert-heading">404 エラー</h4>
  <p>このページは存在しません。</p>
  <hr>
   <p>お探しのページが見られない場合は、以下のフォームで検索してみてください。</p>
  <?php get_search_form(); ?>
  <p> <a href="<?php echo home_url( '/' ); ?>" title="<?php echo get_bloginfo( 'name', 'display' ); ?>" rel="home">
    <?php bloginfo( 'name' ); ?>
    のトップページへ戻る</a> </p>
</div>
<?php get_footer(); ?>