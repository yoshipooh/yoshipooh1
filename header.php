<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="shimanoen_about" content="shimanoen_about">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
<?php if ( is_front_page() ): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
<?php elseif ( is_home() || is_archive()): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive-home.css">
<?php elseif ( is_page(41) ) : ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/about.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive-about.css">
<?php elseif ( is_page(43) ) : ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/store.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive-store.css">
<?php elseif ( is_page(46) ) : ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/information.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive-information.css">
<?php elseif ( is_page(78) ) : ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/form.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive-form.css">
<?php elseif ( is_single() ) : ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive-single.css">
<?php else: ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
<?php endif; ?>

  <title>しま農園</title>
</head>

<body>
  <header>
    <div class="header-inner">
      <nav>
        <ul class="header-list flex">
          <li class="header-menu header1"><a href="<?php echo get_page_link(41); ?>">当園について</a></li>
          <li class="header-menu header2"><a href="<?php echo get_page_link(46); ?>">お知らせ</a></li>
          <?php if ( is_front_page() ): ?>
            <li><h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/top-img/header-logo.png"></a></h1></li>
          <?php else : ?>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/top-img/header-logo.png"></a></li>
          <?php endif; ?>
          <li class="header-menu header3"><a href="<?php echo get_page_link(43); ?>">品目・ストア</a></li>
          <li class="header-menu header4"><a href="<?php echo get_page_link(78); ?>">お問い合わせ</a></li>
          <div class="humberger">
            <div></div>
            <div></div>
            <div></div>
            <p class="humberger-menu">MENU</p>
          </div>
        </ul>
      </nav>
    </div><!-- /.header-inner -->
  </header>
