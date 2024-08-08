<?php load_view('_head'); ?>

<div class="login">
  <img src="public/themes/default/img/logo.png">
  <h3>Login</h3>
  <?php if ($message): ?>
    <p class="alert alert-warning">
      <?php echo $message; ?>
    </p>
  <?php endif; ?>
  <?php echo form_open('login'); ?>
  <p>Username<br>
    <?php echo form_input('username', post('username'), 'id="username" class="form-control"'); ?>
    <?php echo form_error('username'); ?>
  </p>
  <p>Password<br>
    <?php echo form_password('password', '', 'id="password" class="form-control"'); ?>
    <?php echo form_error('password'); ?>
  </p>
  <p>
    <?php echo form_submit('submit', 'Login', 'id="login" class="btn btn-success"'); ?>
    <?php echo anchor('forgot', 'Forgot password?', 'id="forgot"'); ?>
  </p>
  <p>
    No account yet? <?php echo anchor('register', 'Register', 'id="register"'); ?>
  </p>
  <?php echo form_close(); ?>

</div>

<style>
  .login {
    width: 300px;
    margin: auto;
  }
  .login img {
    width: 128px;
  }
</style>
