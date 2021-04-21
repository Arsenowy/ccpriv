<footer class="footer text-center">

  <div class="row my-5">
    <div class="col-md-1">
      <a class="navbar-brand footer__logo" href="#">
        <img class="mb-3 mx-auto footer__logo--img" src="./wp-content/themes/ccpriv/assets/images/ccpriv.png" alt="logo"></a>
    </div>
    <div class="col-md-3">
      <?php
      wp_nav_menu(
        array(
          'menu' => 'footer',
          'container' => '',
          'theme_location' => 'footer',
          'items_wrap' => '<ul id="" class="footer__nav navbar-nav mx-auto text-center">%3$s</ul>'
        )
      );
      ?>
    </div>
    <div class="col-md-4 footer__social">
      <div class="footer__social--title">Dołącz do nas w social mediach</div>
      <div class="footer__social--box">
        <div class="footer__social--icon">
          <a target="_blank" href="<?php the_field('footer-facebook-url') ?>">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
        <div class="footer__social--icon">
          <a target="_blank" href="<?php the_field('footer-twitter-url') ?>">
            <i class="fab fa-twitter"></i>
          </a>
        </div>
        <div class="footer__social--icon">
          <a target="_blank" href="<?php the_field('footer-youtube-url') ?>">
            <i class="fab fa-youtube"></i>
          </a>
        </div>
        <div class="footer__social--icon">
          <a target="_blank" href="<?php the_field('footer-telegram-url') ?>">
            <i class="fab fa-telegram-plane"></i>
          </a>
        </div>
        <div class="footer__social--icon">
          <a target="_blank" href="<?php the_field('footer-linkedin-url') ?>">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex flex-column">
      <a href="tel:<?php the_field('footer-phone') ?>" class="footer__contact--text"><?php the_field('footer-phone') ?></a>
      <a target="_blank" href="<?php the_field('footer-telegram-url') ?>" class="footer__contact--text"><?php the_field('footer-telegram-text') ?></a>
      <a href="mailto:<?php the_field('footer-mail') ?>" class="footer__contact--text"><?php the_field('footer-mail') ?></a>
    </div>

  </div>
  <p class="footer__copyright">© 2021 CCPRIV. Wszystkie prawa zastrzeżone. <br>Strona stworzona z <i class="far fa-heart"></i> przez <a target="_blank" href="https://famatech.pl">Famatech</a>.</p>

</footer>

<?php
wp_footer()
?>

</body>

</html>