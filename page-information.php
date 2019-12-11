<?php get_header(); ?>
    
  <h1 class="headline">お知らせ</h1>
  <div class="blog-container">
    <h4 class="content-text"><span>しま農園の愉快な日々を</span><span>綴っています。</span></h4>
    <div class="blog">
      <div class="blog-content">


      <?php
$args = Array( 'posts_per_page' => 10 );
 
$wp_query = new WP_Query( $args );

if ( $wp_query->have_posts() ) :
    while ( $wp_query->have_posts() ) :
        $wp_query->the_post();
?>


<div class="blog-content">
  <div class="blog-image" alt="blog-image1"><?php the_post_thumbnail('thumbnail'); ?></div>
  <div class="genre"><?php the_category(); ?></div>
  <p class="blog-date"><?php the_time( "Y年n月j日" ); ?></p>
  <h4 class="blog-text"><?php the_title(); ?></h4>
</div><!-- /.blog-event -->

<?php endwhile; ?>
<?php endif; ?>     

      </div><!-- /.blog-content -->
    </div><!-- /.blog -->
    <div class="buttons">
      <button class="button">次のページへ</button>
    </div><!-- /.blog-buttons -->
  </div><!-- /.blog-container -->

  <?php get_footer(); ?>
