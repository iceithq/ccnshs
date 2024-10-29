<h3>Add user_token</h3>
<?php echo form_open('user_tokens/add'); ?>
<p>Id<br>
  <?php echo form_input('id', $this->input->post('id')); ?>
  <?php echo form_error('id'); ?>
</p>
<p>User_id<br>
  <?php echo form_input('user_id', $this->input->post('user_id')); ?>
  <?php echo form_error('user_id'); ?>
</p>
<p>Token<br>
  <?php echo form_input('token', $this->input->post('token')); ?>
  <?php echo form_error('token'); ?>
</p>
<p>Expires_at<br>
  <?php echo form_input('expires_at', $this->input->post('expires_at')); ?>
  <?php echo form_error('expires_at'); ?>
</p>
<p>Created_at<br>
  <?php echo form_input('created_at', $this->input->post('created_at')); ?>
  <?php echo form_error('created_at'); ?>
</p>
<p>Updated_at<br>
  <?php echo form_input('updated_at', $this->input->post('updated_at')); ?>
  <?php echo form_error('updated_at'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('user_tokens', 'cancel'); ?>
</p>
<?php echo form_close(); ?>