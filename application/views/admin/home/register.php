<?php load_view('_head'); ?>

<div class="register">
  <img src="public/themes/default/img/logo.png">
  <h3>Register</h3>
  <?php echo form_open('register'); ?>
  <p>Email<br>
    <?php echo form_input('email', post('email'), 'class="form-control"'); ?>
    <?php echo form_error('email'); ?>
  </p>
  <p>Password<br>
    <?php echo form_password('password', '', 'class="form-control"'); ?>
    <?php echo form_error('password'); ?>
  </p>
  <p>Confirm password<br>
    <?php echo form_password('confirm_password', '', 'class="form-control"'); ?>
    <?php echo form_error('confirm_password'); ?>
  </p>
  <p>
    <?php echo form_submit('submit', 'Save changes', 'class="btn btn-success"'); ?>
  </p>
  <p>
    Already have an account? <?php echo anchor('login', 'Log in'); ?>
  </p>
  <?php echo form_close(); ?>
</div>

<style>
  .register {
    width: 300px;
    margin: auto;
  }

  .register img {
    width: 128px;
  }
</style>