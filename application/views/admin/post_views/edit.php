<h3>Edit post_view</h3>
<?php echo form_open('post_views/edit/' . $post_view->id); ?>
<p>Id<br>
  <?php echo form_input('id', $post_view->id); ?>
  <?php echo form_error('id'); ?>
</p>
<p>Post_id<br>
  <?php echo form_input('post_id', $post_view->post_id); ?>
  <?php echo form_error('post_id'); ?>
</p>
<p>Ip_address<br>
  <?php echo form_input('ip_address', $post_view->ip_address); ?>
  <?php echo form_error('ip_address'); ?>
</p>
<p>Created_at<br>
  <?php echo form_input('created_at', $post_view->created_at); ?>
  <?php echo form_error('created_at'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('post_views', 'cancel'); ?>
</p>
<?php echo form_close(); ?>