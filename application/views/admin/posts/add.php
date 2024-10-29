<h3>
  New post
</h3>
<?php echo form_open('posts/add'); ?>
<p>Title<br>
  <?php echo form_input('title', post('title'), 'id="title" class="form-control"'); ?>
  <?php echo form_error('title'); ?>
</p>
<p>Teaser<br>
  <?php echo form_textarea('teaser', post('teaser'), 'id="teaser" class="form-control teaser"'); ?>
  <?php echo form_error('teaser'); ?>
  <link rel="stylesheet" href="https://unpkg.com/easymde/dist/easymde.min.css">
  <script src="https://unpkg.com/easymde/dist/easymde.min.js"></script>
  <script>
    const teaser = new EasyMDE({
      element: document.getElementById('teaser'),
      maxHeight: "300px" // Adjust the height as needed
    });
  </script>
</p>
<p>Content<br>
  <?php echo form_textarea('content', post('content'), 'id="content" class="form-control content"'); ?>
  <?php echo form_error('content'); ?>
  <script>
    const content = new EasyMDE({
      element: document.getElementById('content'),
      maxHeight: "600px" // Adjust the height as needed
    });
  </script>
</p>
<p>Created<br>
  <?php echo form_input('created_at', now(), 'id="created_at" class="form-control datepicker"'); ?>
  <?php echo form_error('created_at'); ?>
  <!-- Bootstrap Datepicker CSS and JS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true
      });
    });
  </script>
</p>
<p>
  <?php echo form_submit('submit', 'Save  post', 'id="save" class="btn btn-success"'); ?>
  or
  <?php echo anchor('posts', 'cancel'); ?>
</p>
<?php echo form_close(); ?>

<!-- include summernote css/js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

<script>
  $(document).ready(function() {
    $('.teaserx').summernote({
      height: 200
    });
    $('.contentx').summernote({
      height: 600
    });
  });
</script>