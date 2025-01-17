                <article>
                  <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                      <ul class="c-card__menuInfo u-flex__column-column">
                        <li
                          class="c-card__menuList c-inner__menuList u-flex__menuInfo">
                          <figure>
                            <?php if (has_post_thumbnail()): ?>
                              <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                              <img src="<?php echo esc_url(get_template_directory_uri() . '/image/no-image.png'); ?>" alt="">
                            <?php endif; ?>
                          </figure>
                          <figcaption class="c-inner__card-body">
                            <h3 class="c-card__menu-title"><?php the_title(); ?></h3>
                            <h4><?php echo get_post_meta($post->ID, 'h2_title', true); ?></h4>
                            <?php the_tags(); ?>
                            <?php the_excerpt(); ?>
                            <button class="c-button__card"><a href="<?php echo get_permalink(); ?>">詳しく見る</a></button>
                          </figcaption>
                        </li>
                      </ul>
                    <?php endwhile; ?>
                    <div class="c-pagination">
                      <?php if (wp_is_mobile()): ?>
                        <?php
                        the_posts_navigation(array(
                          'prev_text'          => __('<<前へ', 'hamburger-wp'),
                          'next_text'          => __('次へ>>', 'hamburger-wp')
                        ));
                        ?>
                      <?php else: ?>
                        <?php wp_pagenavi(); ?>
                      <?php endif; ?>
                    </div>
                  <?php else: ?>
                    <div class="p-menuInfo__no-archive">
                      <p>検索結果はありませんでした。</p>
                      <p>申し訳ございませんが、<a href="<?php echo esc_url(home_url('/')); ?>">こちらのリンク</a> からトップページにお戻り下さい。</p>
                    </div>
                  <?php endif; ?>
                </article>