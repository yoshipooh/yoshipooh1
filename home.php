<?php get_header(); ?>
    
  <h1 class="headline">お知らせ</h1>
    <h4 class="home-content-text"><span>しま農園の愉快な日々を</span><span>綴っています。</span></h4>
    <div class="blog-s">
    <div class="blog-container-s flex">

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$the_query = new WP_Query( array(
     'post_status' => 'publish',
     'paged' => $paged,
     'posts_per_page' => 10, // 表示件数
     'category_name' => 'event, diary',
     'orderby'     => 'date',
     'order' => 'DESC'
) );

  
if ($the_query->have_posts()) :?><?php
    while ($the_query->have_posts()) : $the_query->the_post();?>

<div class="blog-content">
<a href="<?php echo get_page_link(); ?>">
  <div class="blog-image" alt="blog-image1"><?php the_post_thumbnail('thumbnail',  array('class' => 'blog-image') ); ?></div>
  <div class="genre"><?php the_category(); ?></div>
  <p class="blog-date"><?php the_time( "Y年n月j日" ); ?></p>
  <h4 class="blog-text"><?php the_title(); ?></h4>
  </a>
</div><!-- /.blog-event -->

<?php endwhile; ?>
<?php endif; ?>     

    </div><!-- /.blog-container-s -->
    <div class="button-container">
    <?php if (get_previous_posts_link()):?>
      <div class="blog-buttons left">
        <button class="blog-button"><?php previous_posts_link('前のページへ'); ?></button>
      </div><!-- /.blog-buttons -->
    <?php endif; ?>
    <?php if (get_next_posts_link()):?>
      <div class="blog-buttons right">
        <button class="blog-button"><?php next_posts_link('次のページへ'); ?></button>
      </div><!-- /.blog-buttons -->
    <?php endif; ?>

  </div><!-- /.blog-s -->

  <?php get_footer(); ?>

