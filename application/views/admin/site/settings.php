<h3>Update site</h3>
<?php if ($message): ?>
  <p class="alert alert-info"><?php echo $message; ?></p>
<?php endif; ?>
<?php echo form_open('site/settings'); ?>
<p>Title<br>
  <?php echo form_input('title', $site->title, 'class="form-control"'); ?>
  <?php echo form_error('title'); ?>
</p>
<p>Description<br>
  <?php echo form_textarea('description', $site->description, 'class="form-control"'); ?>
  <?php echo form_error('description'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Update site settings', 'class="btn btn-success"'); ?>
</p>
<?php echo form_close(); ?>
