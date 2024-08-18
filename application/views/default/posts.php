<h3>Blog</h3>

<?php foreach ($posts as $post) : ?>
  <article class="mb-4">
    <h4>
      <?php echo anchor('post/' . $post->id, $post->title); ?>
    </h4>
    <p>
      <?php echo date('F d, Y', strtotime($post->created_at)); ?>
    </p>
    <?php echo post_teaser($post); ?>
  </article>
<?php endforeach; ?>