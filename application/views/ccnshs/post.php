<div class="container mt-3">
  <h4>
    <?php echo $post->title; ?>
  </h4>
  <?php if (session('user_id')) : ?>
    <p>
      <?php echo anchor('posts/edit/' . $post->id, 'Edit'); ?>
    </p>
  <?php endif; ?>
  <p class="post_date">
    <?php echo date('F d, Y', strtotime($post->created_at)); ?>
  </p>
  <?php echo parsedown_text($post->content); ?>
</div>