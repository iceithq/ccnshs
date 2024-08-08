<head>
  <base href="<?php echo base_url(); ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>

  <!-- include summernote css/js -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

</head>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <?php echo anchor('.', '
      <img src="public/themes/ccnshs/img/deped_logo.png?v=2" height="64">
      <img src="public/themes/ccnshs/img/ccnshs_logo.png?v=2" height="64">'); ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <?php echo anchor('.', 'Home', 'class="nav-link"'); ?>
        </li>
        <?php foreach ($menus as $menu): ?>
          <li class="nav-item">
            <?php echo anchor($menu->url, $menu->name, 'class="nav-link"'); ?>
          </li>
        <?php endforeach; ?>
        <?php if (session('user_id')): ?>
          <li class="nav-item">
            <?php echo anchor('login', 'Manage my site', 'class="nav-link"'); ?>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>



<div class="container mt-2">
  <?php echo $content; ?>
</div>

<style>
footer {
  margin-top: 100px;
  padding-top: 50px;
  background: #F0F0F0;
  font-size: 0.8em;
}
</style>

<footer>
  <div class="row">
    <div class="col-md-3 col-sm-12">
      <img src="public/themes/ccnshs/img/govph-seal-mono-footer.jpg" class="img-responsive">
    </div>
    <div class="col-md-3 col-sm-12">
      <b>REPUBLIC OF THE PHILIPPINES</b>
      <p>All content is in the public domain unless otherwise stated.</p>
    </div>
    <div class="col-md-3 col-sm-12">
      <b>ABOUT GOVPH</b>
      <p>Learn more about the Philippine government, its structure, how government works and the people behind it.</p>
      <b>GOV.PH</b>
      <p>Open Data Portal<br>
        Official Gazette</p>
    </div>
    <div class="col-md-3 col-sm-12">
      <b>GOVERNMENT LINKS</b>
      <p>Office of the President<br>
      Office of the Vice President<br>
      Senate of the Philippines<br>
      House of Representatives<br>
      Supreme Court<br>
      Court of Appeals<br>
      Sandiganbayan</p>
    </div>
  </div>
</footer>
