<h3>Add menu</h3>
<?php echo form_open('menus/add'); ?>
<p>Name<br>
  <?php echo form_input('name', post('name'), 'class="form-control"'); ?>
  <?php echo form_error('name'); ?>
</p>
<p>URL<br>
  <?php echo form_input('url', post('url'), 'class="form-control"'); ?>
  <?php echo form_error('url'); ?>
</p>
<p>Sort order<br>
  <?php echo form_input('sort_order', post('sort_order'), 'class="form-control"'); ?>
  <?php echo form_error('sort_order'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save menu', 'class="btn btn-success"'); ?>
  or <?php echo anchor('menus', 'cancel'); ?>
</p>
<?php echo form_close(); ?>
