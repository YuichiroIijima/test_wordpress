<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <title>
    <?php wp_title(' | ', true, 'right'); ?>
    <?php bloginfo('name'); ?>
  </title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header>
    <h1 class="logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="N予備校">
      </a>
    </h1>
    <nav class="pc-menu">
      <ul>
        <li><a href="#">大学受験</a></li>
        <li><a href="#">プログラミング</a></li>
        <li><a href="#">Webデザイン</a></li>
      </ul>
    </nav>
    <a href="#">お問い合わせ</a>
  </header>