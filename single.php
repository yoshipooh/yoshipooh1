<?php get_header(); ?>

<div class="single">
    <div class="single-container">
        <?php
        if ( have_posts() ) :
        while ( have_posts() ) : the_post();
        ?>

        <h1><?php the_title(); ?></h1>
        <div class="single-sub-title">
            <p class="single-date"><?php the_time( "Y年n月j日" ); ?></p>
            <div class="genre"><?php the_category(); ?></div>
        </div>
        <div class="single-image" alt="image"><?php the_post_thumbnail('thumbnail', array( 'class' => 'single-image' )); ?></div>

        <?php
        endwhile;
        endif;
        ?>
        <p>◯月◯日、第５回親子イベントが開催されました！<br>
        お天気にも恵まれ、約20組の参加者でわきあいあいと行われました！</p>
        <h2>ここにh2が入ります。</h2>
        <p>◯月◯日、第５回親子イベントが開催されました！<br>
        お天気にも恵まれ、約20組の参加者でわきあいあいと行われました！</p>
        <h3>ここにh3が入ります。</h3>
        <p>◯月◯日、第５回親子イベントが開催されました！<br>
        お天気にも恵まれ、約20組の参加者でわきあいあいと行われました！</p>
        <h4>ここにh４が入ります。</h4>
        <p>◯月◯日、第５回親子イベントが開催されました！<br>
        お天気にも恵まれ、約20組の参加者でわきあいあいと行われました！</p>
        <h5>ここにh５が入ります。</h5>
        <ul class="list-circle">
            <li>番号なしリスト１</li>
            <li>番号なしリスト１</li>
            <li>番号なしリスト１</li>
            <li>番号なしリスト１</li>
        </ul>
        <ul class="list-number">
            <li class="list-number-1">番号付きリスト１</li>
            <li class="list-number-2">番号付きリスト１</li>
            <li class="list-number-3">番号付きリスト１</li>
            <li class="list-number-4">番号付きリスト１</li>
        </ul>

        <a href="#">ここにリンクが入ります。</a>
        <p class="bold">ここに太字が入ります。</p>
    </div><!-- /.single-container -->
</div><!-- /.single -->

<?php get_footer(); ?>
