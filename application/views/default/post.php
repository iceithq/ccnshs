<h4><?php echo $post->title; ?></h4>
<?php if (session('user_id')): ?>
  <p><?php echo anchor('posts/edit/' . $post->id, 'Edit'); ?></p>
<?php endif; ?>
<p>
  <?php echo date('F d, Y', strtotime($post->created_at)); ?>
</p>
<?php echo $post->content; ?>
