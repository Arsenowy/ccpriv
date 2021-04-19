<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="https://famatech.pl">
  <title><?php wp_title() ?></title>

  <?php
  wp_head();
  ?>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand navbar__logo" href="#">
      <img class="mb-3 mx-auto navbar__logo--img" src="./wp-content/themes/ccpriv/assets/images/ccpriv.png" alt="logo"></a>
    <div class="navbar__toggle">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse navbar__toggle--box" id="navbar-main">
      <?php
      wp_nav_menu(
        array(
          'menu' => 'primary',
          'container' => '',
          'theme_location' => 'primary',
          'items_wrap' => '<ul id="" class="navbar-nav navbar__ul mx-auto text-center">%3$s</ul>'
        )
      );
      ?>
    </div>
    <a class="btn btn-primary navbar__cta" href="#">
      <i class="fas fa-phone-alt navbar__cta--icon"></i>
      Zadzwoń do nas
    </a>
  </nav>
  <!-- END NAVBAR -->