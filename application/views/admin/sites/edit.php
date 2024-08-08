<h3>Edit site</h3>
<?php echo form_open('sites/edit/' . $site->id); ?>
<p>Id<br>
  <?php echo form_input('id', $site->id); ?>
  <?php echo form_error('id'); ?>
</p>
<p>Title<br>
  <?php echo form_input('title', $site->title); ?>
  <?php echo form_error('title'); ?>
</p>
<p>Description<br>
  <?php echo form_input('description', $site->description); ?>
  <?php echo form_error('description'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('sites', 'cancel'); ?>
</p>
<?php echo form_close(); ?>