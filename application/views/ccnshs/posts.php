<div class="container mt-3">
<h4>News</h4>

<?php foreach ($posts as $post) : ?>
    <h5 class="mt-3">
      <?php echo anchor('post/' . $post->id . '/' . perma_link($post->title), $post->title); ?>
  </h5>
    <p class="post_date">
    <?php echo date('F d, Y', strtotime($post->created_at)); ?>
  </p>
    <?php echo $post->teaser; ?>
    <?php echo anchor('post/' . $post->id . '/' . perma_link($post->title), '<b>See more...</b>'); ?>
    <hr>
  <?php endforeach; ?>
</div>