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
      <img src="public/themes/default/img/logo.png?v=2" height="64">'); ?>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <?php echo anchor('.', 'Home', 'class="nav-link"'); ?>
      </li>
      <?php foreach ($menus as $menu) : ?>
        <li class="nav-item">
          <?php echo anchor($menu->url, $menu->name, 'class="nav-link"'); ?>
        </li>
      <?php endforeach; ?>
      <?php if (session('user_id')) : ?>
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