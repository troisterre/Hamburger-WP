<?php
// 取得したい投稿内容の条件を指定
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 1,
  'category_name' => 'map',
);

// オブジェクト取得
$my_posts = new WP_Query($args);

// ループの開始
if ($my_posts->have_posts()):
  while ($my_posts->have_posts()):
    $my_posts->the_post();
?>
    <!-- 表示させたい投稿内容 -->
    <div class="p-map__bg">
      <div class="p-map__transparent">
        <div class="c-inner__map p-map__contents">
          <h3 class="c-title__map"><?php the_title(); ?></h3>
          <span class="p-map__bar"></span>
          <div class="p-map__text">
            <p><?php the_content(); ?></p>
          </div>
          <!-- /.p-map__contents -->
          <!-- /.c-card__body -->

          <!-- 投稿表示終了。メインクエリの値に戻す -->
      <?php endwhile;
  endif;
  wp_reset_postdata(); ?>