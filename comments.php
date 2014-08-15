<ol class="commentlist">
  <?php wp_list_comments('type=comment&callback=custom_comment');
  ?>
</ol>
<?php comment_form(); ?>
