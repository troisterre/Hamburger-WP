<footer class="l-footer">
        <div class="c-inner__footer u-flex__column-center">
          <?php 
           wp_nav_menu( array (
            'menu' => 'footermenu',
            'menu_class' => 'p-menu__footer u-flex__center footer_nav',
            'container' => 'div',
            'theme_location' => 'footer-navigation'
           )); 
           ?>
          <small class="p-menu__footer-small">Copyright: RaiseTech</small>
        </div>
        <!-- /.c-inner__footer -->
      </footer>
      <?php wp_footer(); ?>
    </div>
  </body>
</html>
