<footer>
  <?php if ( is_single() || is_page(46) || is_page(78) || is_home() || is_archive()): ?>
  <img class="footer-bg-white" src="<?php echo get_template_directory_uri(); ?>/img/top-img/footer-bg.png" alt="footer-bg">
  <?php elseif (is_front_page()):?>
  <img class="footer-bg" src="<?php echo get_template_directory_uri(); ?>/img/top-img/footer-bg.png" alt="footer-bg">
  <?php endif; ?>
    <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/top-img/header-logo.png" alt="footer-logo">
    <h5 class="address">〒123-4567 〇〇県〇〇郡〇〇村831</h5>
    <h5>TEL:098-7654-3210  FAX:123-4567-831</h5>
    <div class="footer-menu flex">
      <h4><a href="#">配送・お支払いについて</a></h4>
      <h4 class="text-pertition">|</h4>
      <h4><a href="#">プライバシーポリシー</a></h4>
      <h4 class="text-pertition">|</h4>
      <h4><a href="<?php echo get_page_link(78); ?>">お問い合わせ</a></h4> 
    </div><!-- /.footer-menu -->
    <div class="footer-credit">
      <p class="credit">Copyright ©︎ iSara All Rights Reserved.</p>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>

