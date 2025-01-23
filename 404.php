<?php get_header(); ?>
<article class="c-article">
  <section class="p-fv__archive c-inner__fv-archive">
    <div class="c-title__fv-archive u-flex__archive-fv">
      <h1>Search:</h1>
      <p class="uppercase">404 not found<span>error</span></p>
    </div>
  </section>
  <!-- /.p-fv__archive -->
  <section class="p-menuInfo">
    <div class="c-inner__menuInfo">
      <div class="p-menuInfo__no-archive">
        <p>お探しのページは見つかりませんでした。</p>
        <p>申し訳ございませんが、<a href="<?php echo esc_url(home_url('/')); ?>">こちらのリンク</a> からトップページにお戻り下さい。</p>
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