<div class="l-main__right" id="js-menu">
          <aside class="l-sidebar">
            <div class="c-inner__sidebar category_nav">
              <h4 class="c-title__sidebar u-roboto__bold">Menu</h4>
              <div class="c-bar__close" id="js-close">
                <span class="c-bar__cross"></span>
              </div>
              <!-- /.c-bar__close -->
               <?php 
              wp_nav_menu( array( 
                'theme_location' => 'categorymenu',
                'menu_class' => 'categorymenu',
                'menu' => 'categorymenu',
                'container' => 'div'
              ));
              ?> 
              <div class="sidebar__inner">
        <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar' ); ?>
        <?php endif; ?>
    </div>
          </aside>
          <div class="l-sidebar__bg" id="js-bg">
            <span class="c-bar__cross-bg" id="js-close"></span>
          </div>
          <!-- /.l-sidebar__bg -->
        </div>
        <!-- /.l-main__right -->