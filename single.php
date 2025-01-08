        <?php get_header(); ?>
          <article class="c-article">
            <?php if(have_posts()): ?>
              <?php while (have_posts()): the_post(); ?>
              <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <section
              class="p-fv__single c-inner__fv-single u-flex__center-start"
            >
              <h1 class="c-title__fv-single"><?php the_title(); ?></h1>
            </section>
            <!-- /.p-fv__single -->
            <section class="p-contents">
            <div class="c-inner__contents-single">
                <h2 class="c-title__contents-single"><?php echo get_post_meta($post->ID,'h2_title',true); ?></h2>
                <!-- /.c-title__contents-single -->
                <p class="p-contents__text">
                <?php echo get_post_meta($post->ID,'h2_title_description',true); ?>
                <?php posts_nav_link(); ?>
                </p>
                <!-- /.p-contents__text -->
                <h3><?php echo get_post_meta($post->ID,'h3_title',true); ?></h3>
                <h4><?php echo get_post_meta($post->ID,'h4_title',true); ?></h4>
                <h5><?php echo get_post_meta($post->ID,'h5_title',true); ?></h5>
                <h6><?php echo get_post_meta($post->ID,'h6_title',true); ?></h6>
                <?php the_content(); ?>
                <?php comments_template(); ?>
              </div>
              <!-- /.c-inner__contents-single -->
            </section>
            <!-- /.p-contents__single -->
            </div>
             
             <?php endwhile; ?>
             <?php endif; ?>
          </article>
     
        </div>
        <!-- /.l-main__left -->
        <?php get_sidebar(); ?>
        <!-- /.l-main__right -->
      </div>
      <!-- /.u-flex__stretch -->
     <?php get_footer(); ?>
