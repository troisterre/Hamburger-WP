
          <?php get_header(); ?> 
     
          <article class="c-article">
            <section class="p-fv c-inner__fv">
              <h1 class="c-title__fv">チーズバーガー</h1>
            </section>
            <!-- /.p-fv -->
            <section class="p-about">
              <div class="c-inner__about post">
                <ul class="c-card u-flex__column-row">          
                  <!-- /.c-card__list -->
                  <li class="c-card__list u-flex__column-between">
                    <div class="c-card__top">
                      <h3 class="c-title__card u-roboto__bold">Take Out</h3>
                      <span class="c-card__bar"></span>
                    </div>    
                    <div class="c-card__bottom">  
                    <?php get_template_part('template-parts/loop','take_out'); ?>  
                   </div>
                  
                  </li>
                  <li class="c-card__list u-flex__column-between">
                    <div class="c-card__top">
                      <h3 class="c-title__card u-roboto__bold">Eat In</h3>
                      <span class="c-card__bar"></span>
                    </div> 
                    <div class="c-card__bottom"> 
                      <?php get_template_part('template-parts/loop','eat_in'); ?>  
                    </div>
                  </li>
                </ul>
                <!-- /.c-card -->
              </div>
              <!-- /.c-inner -->
            
            </section>
            <!-- /.p-about -->
            <section class="p-map">
            <?php $posts = get_posts('numberposts=1&category=270'); global $post; ?>
           <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
                    <div class="p-map__bg">
                     <div class="p-map__transparent">
                  <div class="c-inner__map p-map__contents">
                    <h3 class="c-title__map"><?php the_title(); ?></h3>
                    <span class="p-map__bar"></span>
                    <div class="p-map__text">
                     <p><?php the_content(); ?></p>
                    </div>
                    <!-- /.p-map__contents -->
                  </div>
                </div>
              </div>   
            <?php endforeach; endif; ?>
            </section>
            <!-- /.p-map -->  
          </article>
        </div> 
        <!-- /.l-main__left -->
        <?php get_sidebar(); ?>
      </div>
      <!-- /.u-flex__stretch -->
    <?php get_footer(); ?>