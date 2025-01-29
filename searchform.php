<form class="c-search u-flex__between" method="get" action="<?php echo   esc_url(home_url('/')); ?>">
  <input
    class="c-search__form"
    type="text"
    name="s"
    value="<?php if (is_search()) {
              echo get_search_query();
            } ?>"
    name="s"
    id="s" />
  <button class="c-button__search u-flex__center" type="submit" value="検索">検索</button>
</form>