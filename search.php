         <?php get_header(); ?>
         <article class="c-article">
           <section class="p-fv__archive c-inner__fv-archive">
             <div class="c-title__fv-archive u-flex__archive-fv">
               <h1>Search:</h1>
               <p><?php the_search_query(); ?></p>
             </div>
           </section>
           <!-- /.p-fv__archive -->
           <section class="p-menuInfo">
             <div class="c-inner__menuInfo">
               <?php if (isset($_GET['s']) && empty($_GET['s'])): ?>
                 <div class="p-menuInfo__no-archive">
                   <p>検索キーワードが入力されていません。</p>
                   <p>申し訳ございませんが、<a href="<?php echo esc_url(home_url('/')); ?>">こちらのリンク</a> からトップページにお戻り下さい。</p>
                 </div>
               <?php else: ?>
                 <div>
                   <h3 class="p-archive__title">小見出しが入ります</ h3>
                     <p class="p-archive__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキ ストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                 </div>
                 <?php echo esc_html(get_template_part('template-parts/loop', 'archives')); ?>
               <?php endif; ?>
               <?php wp_link_pages(); ?>
               <?php if (function_exists('wp_pagenavi')) {
                  wp_pagenavi();
                } ?>


             </div>
           </section>
         </article>
         </div>

         <?php get_sidebar(); ?>

         </div>

         <?php get_footer(); ?>