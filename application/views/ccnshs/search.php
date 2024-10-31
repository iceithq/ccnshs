<div class="container mt-3">
  <h4>Search</h4>
  <p>
    About <?php echo $count_posts; ?> results found.
  </p>

  <?php $pagination_links = $this->pagination->create_links(); ?>
  <?php echo $pagination_links; ?>

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

  <?php echo $pagination_links; ?>

</div>