<h3><?php echo $page->title; ?></h3>
<?php if (session('user_id')) : ?>
  <p>
    <?php echo anchor('pages/edit/' . $page->id, 'Edit'); ?>
  </p>
<?php endif; ?>
<?php echo $page->content; ?>