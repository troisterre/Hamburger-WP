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
            <?php get_template_part('template-parts/loop', 'take_out'); ?>
          </div>

        </li>
        <li class="c-card__list u-flex__column-between">
          <div class="c-card__top">
            <h3 class="c-title__card u-roboto__bold">Eat In</h3>
            <span class="c-card__bar"></span>
          </div>
          <div class="c-card__bottom">
            <?php get_template_part('template-parts/loop', 'eat_in'); ?>
          </div>
        </li>
      </ul>
      <!-- /.c-card -->
    </div>
    <!-- /.c-inner -->

  </section>
  <!-- /.p-about -->
  <section class="p-map">
    <?php get_template_part('template-parts/loop', 'map'); ?>
  </section>
  <!-- /.p-map -->
</article>
</div>
<!-- /.l-main__left -->
<?php get_sidebar(); ?>
</div>
<!-- /.u-flex__stretch -->
<?php get_footer(); ?>