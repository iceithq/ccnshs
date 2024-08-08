<h4>News</h4>

<?php foreach ($posts as $post): ?>
  <h5>
    <?php echo anchor('post/' . $post->id, $post->title); ?>
  </h5>
  <p>
    <?php echo date('F d, Y', strtotime($post->created_at)); ?>
  </p>
  <?php echo $post->content; ?>
<?php endforeach; ?>
