<?php
// 取得したい投稿内容の条件を指定
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'category_name' => 'eatin',
);

// オブジェクト取得
$my_posts = new WP_Query($args);

// ループの開始
if ($my_posts->have_posts()):
    while ($my_posts->have_posts()):
        $my_posts->the_post();
?>
        <!-- 表示させたい投稿内容 -->
        <div class="c-card__body">
            <h4><?php the_title(); ?></h4>
            <p><?php the_excerpt(); ?></p>
        </div>
        <!-- /.c-card__body -->

        <!-- 投稿表示終了。メインクエリの値に戻す -->
<?php endwhile;
endif;
wp_reset_postdata(); ?>