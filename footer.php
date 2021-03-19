<footer>
    <div class="footer__container">
      <div class="footer__top">
           <a class="footer__logo" href="#"><img src="<?php echo get_theme_file_uri('/assets/logo-footer.png') ?>"></a>
           <div id="footer-nav" class="footer__nav">
          
          <?php wp_nav_menu( array (
          'theme_location' => 'header-menu',
          'container_class' => 'nav'
        )); 
        ?>
          
         <!-- <a href="#" class="footer__nav-link">Our Company</a>
          <a href="#" class="footer__nav-link">Locations</a>
          <a href="#" class="footer__nav-link">Contact</a> -->
          </div>
        
      </div>

      <div class="footer__bottom">
        <div id="footer-one" class="footer__column">
            <?php dynamic_sidebar('footer-one') ?>
          <!-- <p class="footer__text"><strong>Designo Central Office</strong></p>
          <p class="footer__text">3886 Wellington Street</p>
          <p class="footer__text">Toronto, Ontario M9C 3J5</p> -->
        </div>
        <div id="footer-two" class="footer__column">
            <?php dynamic_sidebar('footer-two') ?>
          <!-- <p class="footer__text"><strong>Contact Us (Central Office)</strong></p>
          <p class="footer__text">P : +1 253-863-8967</p>
          <p class="footer__text">M : contact@designo.co</p> -->
        </div>
        <div id="footer-three" class="footer__column footer__social">
        <?php dynamic_sidebar('footer-three') ?>
          <!-- <img class="footer__icon" src="<?php echo get_theme_file_uri('/assets/shared/desktop/icon-facebook.svg') ?>">
          <img class="footer__icon" src="<?php echo get_theme_file_uri('/assets/shared/desktop/icon-instagram.svg') ?>">
          <img class="footer__icon" src="<?php echo get_theme_file_uri('/assets/shared/desktop/icon-pinterest.svg') ?>">
          <img class="footer__icon" src="<?php echo get_theme_file_uri('/assets/shared/desktop/icon-twitter.svg') ?>">
          <img class="footer__icon" src="<?php echo get_theme_file_uri('/assets/shared/desktop/icon-youtube.svg') ?>"> -->
        </div>
      </div>
      
    </div>

  <?php designo_scripts(); ?>
   
  </footer>
  <?php wp_footer(); ?>
</body>

</html>
