<h3>Add site</h3>
<?php echo form_open('sites/add'); ?>
<p>Id<br>
  <?php echo form_input('id', $this->input->post('id')); ?>
  <?php echo form_error('id'); ?>
</p>
<p>Title<br>
  <?php echo form_input('title', $this->input->post('title')); ?>
  <?php echo form_error('title'); ?>
</p>
<p>Description<br>
  <?php echo form_input('description', $this->input->post('description')); ?>
  <?php echo form_error('description'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('sites', 'cancel'); ?>
</p>
<?php echo form_close(); ?>