<h3>Add post_view</h3>
<?php echo form_open('post_views/add'); ?>
<p>Id<br>
  <?php echo form_input('id', $this->input->post('id')); ?>
  <?php echo form_error('id'); ?>
</p>
<p>Post_id<br>
  <?php echo form_input('post_id', $this->input->post('post_id')); ?>
  <?php echo form_error('post_id'); ?>
</p>
<p>Ip_address<br>
  <?php echo form_input('ip_address', $this->input->post('ip_address')); ?>
  <?php echo form_error('ip_address'); ?>
</p>
<p>Created_at<br>
  <?php echo form_input('created_at', $this->input->post('created_at')); ?>
  <?php echo form_error('created_at'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('post_views', 'cancel'); ?>
</p>
<?php echo form_close(); ?>