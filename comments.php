<div class="p_comment">
									<?php if(have_comments()): ?>
									 <h2 id="comments" class="p-comment_ttl">Comment</h2>
									 <ul class="p-comment_list">
										<?php wp_list_comments('avatar_size=60'); ?>
									 </ul>
									 <?php endif; ?>
                   <?php 
                     $args = array(
                      'title_reply' => 'Leave a Reply',
                      'label_submit' => 'POST COMMENT',
                     );
                     comment_form($args);
                     ?>
                     </div>
                     <div class="pagination">
    <?php paginate_comments_links(); ?>
</div>