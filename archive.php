<?php get_header(); ?>
    
  <div class="headline">記事一覧</div>
  <div class="blog-s">
    <div class="blog-container-s flex">

      <?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>

<div class="blog-content">
<a href="<?php echo get_page_link(); ?>">
</a>
  <div class="blog-image" alt="blog-image1"><?php the_post_thumbnail('thumbnail',  array('class' => 'blog-image')); ?></div>
  <div class="genre"><?php the_category(); ?></div>
  <p class="blog-date"><?php the_time( "Y年n月j日" ); ?></p>
  <h1 class="blog-text"><?php the_title(); ?></h1>
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
