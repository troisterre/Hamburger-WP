<?php get_header(); ?>
          <article class="c-article">
            <section class="p-fv__archive c-inner__fv-archive">
              <div class="c-title__fv-archive u-flex__archive-fv">
                <h1>Menu:</h1>
                <?php 
                 if(in_category('burger')): ?>
                <p class="c-title__fv-category-title">バーガー</p>
                 <?php elseif(in_category('side')): ?>
                  <p class="c-title__fv-category-title">サイド</p>
                <?php elseif(in_category('drink')): ?>
                  <p class="c-title__fv-category-title">ドリンク</p>
                <?php endif; ?>
              </div>
            </section>
            <!-- /.p-fv__archive -->
            <section class="p-menuInfo">
              <div class="c-inner__menuInfo">
                <?php get_template_part('template-parts/loop','archives'); ?> 
              
                <div class="c-pagination">
                  <div class="c-pagination__sp">
                    <span><< 前へ</span>
                    <span>次へ >></span>
                  </div>
                  <!-- /.c-pagination__sp -->
                  <div class="c-pagination__tablet u-roboto__bold">
                     <?php wp_link_pages(); ?>
                      <?php if(function_exists('wp_pagenavi')) {
                  wp_pagenavi();
                } ?>
                  </div>
                </div>
              </div>
              <!-- /.c-inner__menuInfo -->
            </section>
            <!-- /.p-menuInfo -->
        
          </article>
        </div>
        <!-- /.l-main__left -->
        <?php get_sidebar(); ?>
      </div>
    <?php get_footer(); ?>