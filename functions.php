<?php
function custom_theme_support()
{
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption'
  ));
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('automatic-feed-links');
  add_theme_support("wp-block-styles");
  add_theme_support('responsive-embeds');
  add_theme_support("align-wide");
  add_theme_support("wp-pagenavi");
  add_theme_support('custom-logo', array(
    'width'                => 60,
    'height'               => 60,
  ));
  add_theme_support('custom-background', array(
    'default-color'          => '#fff',
  ));
  add_theme_support('custom-header');
  register_nav_menus(array(
    'footermenu' => esc_html__('footer-navigation', 'hamburger-wp'),
    'categorymenu' => esc_html__('category-navigation', 'hamburger-wp'),
  ));

  add_theme_support('editor_styles');
  register_block_style(
    'core/quote',
    array(
      'name'         => 'blue-quote',
      'label'        => __('Blue Quote', 'hamburger-wp'),
      'inline_style' => '.wp-block-quote.is-style-blue-quote { color: blue; }',
    )
  );
  register_block_pattern(
    'hamburger-wp/my-awesome-pattern',
    array(
      'title'       => __('Two buttons', 'hamburger-wp'),
      'description' => _x('Two horizontal buttons, the left button is filled in, and the right button is outlined.', 'Block pattern description', 'hamburger-wp'),
      'content'     => "<!-- wp:buttons {\"align\":\"center\"} -->\n<div class=\"wp-block-buttons aligncenter\"><!-- wp:button {\"backgroundColor\":\"very-dark-gray\",\"borderRadius\":0} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-background has-very-dark-gray-background-color no-border-radius\">" . esc_html__('Button One', 'hamburger-wp') . "</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button {\"textColor\":\"very-dark-gray\",\"borderRadius\":0,\"className\":\"is-style-outline\"} -->\n<div class=\"wp-block-button is-style-outline\"><a class=\"wp-block-button__link has-text-color has-very-dark-gray-color no-border-radius\">" . esc_html__('Button Two', 'hamburger-wp') . "</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->",
    )
  );
  add_editor_style();
}
add_action('after_setup_theme', 'custom_theme_support');

function  hamburger_script()
{
  wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array());
  wp_enqueue_style('fonts', '//fonts.googleapis.com/css2?family=M+PLUS+1:wght@100..900&family=Roboto:wght@400;700&display=swap', array(), '');
  wp_enqueue_style('hamburger-wp', get_template_directory_uri() . '/css/hamburger.css', array());
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0');
  wp_enqueue_script(' jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), false, true);
  wp_enqueue_script('script', get_template_directory_uri() . '/js/main.js', array(), false, true);
  wp_enqueue_script('comment-reply', get_template_directory_uri() . 'wp-includes/js/comment-reply.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'hamburger_script');

function my_theme_widget_settings()
{
  register_sidebar(array(
    'name' => 'サイドバー',
    'id' => 'sidebar',
    'description' => 'サイドバーに表示されます',
    'before_widget' => '<div id="%1$s" class="widget widget--sidebar %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget__ttl widget__ttl--sidebar"><span class="widget__ttl-inner">',
    'after_title' => '</span></h2>',
  ));
}
add_action('widgets_init', 'my_theme_widget_settings');
