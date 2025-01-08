<?php $posts = get_posts('numberposts=3&category=235'); global $post; ?>
<?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
                      <div class="c-card__body"> 
                          <h4><?php the_title(); ?></h4>  
                           <p><?php the_excerpt(); ?></p>
                      </div>
  <?php endforeach; endif; ?>

