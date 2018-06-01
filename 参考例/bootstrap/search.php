<?php get_header(); ?>
<section id="contents">
    <h1>
      <?php the_search_query(); ?>
      の検索結果 : <?php echo $wp_query->found_posts; ?>件</h1>
    <?php if(have_posts()) :query_posts($query_string.'&posts_per_page=10'); ?>
    <?php while(have_posts()):the_post(); ?>
    <header>
      <time pubdate="pubdate" datetime="<?php the_time('Y-m-d'); ?>" class="entry-date">
        <?php the_time(get_option('date_format')); ?>
      </time>
      <h1 class="archive-title"><a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
        </a></h1>
    </header>
    <section>
      <?php the_excerpt(); ?>
    </section>
    <?php endwhile; ?>
    <?php else: ?>
    <div>
      <p>該当する記事はありませんでした。</p>
    </div>
    <?php endif; ?>
</section>
<?php get_footer(); ?>