<div class="row">
  <?php foreach ($recent_posts as $post) : ?>
    <div class="col-md-6">
      <h4 class="mt-3">
        <?php echo anchor('post/' . $post->id . '/' . perma_link($post->title), $post->title); ?>
      </h4>
      <p class="post_date">
        <?php echo date('F d, Y', strtotime($post->created_at)); ?>
      </p>
      <?php echo parsedown_text($post->teaser); ?>
      <?php echo anchor('post/' . $post->id . '/' . perma_link($post->title), '<b>See more...</b>'); ?>
    </div>
  <?php endforeach; ?>
</div>