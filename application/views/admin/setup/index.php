<?php load_view('_head'); ?>

<body>
  <div class="container">
    <img src="public/themes/default/img/logo.png" height="64">

    <h3>Installation</h3>

    <p>Site Title<br>
      <?php echo form_input('site_title', post('site_title'), 'class="form-control"'); ?>
    </p>
    <p>Description<br>
      <?php echo form_textarea('site_description', post('site_description'), 'class="form-control"'); ?>
    </p>
    <p>
      <?php echo form_submit('submit', 'Finish installation', 'class="btn btn-success"'); ?>
    </p>
  </div>


</body>