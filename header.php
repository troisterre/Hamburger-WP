<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <!-- サイト制作者 -->
  <meta name="author" content="" />
  <!-- サイトのURL -->

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="l-main footerFixed">
    <!-- .l-header -->
    <div class="u-flex__stretch">
      <div class="l-main__left">
        <header class="l-header">
          <div class="c-inner__header u-flex__column">
            <p class="c-button__sidebar u-roboto__bold" id="js-btn">Menu</p>
            <h2 class="c-title__header u-roboto__bold"><a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a></h2>

            <?php esc_html(get_search_form()); ?>
          </div>
          <!-- /.l-header__body c-inner -->
        </header>