<head>
  <base href="<?php echo base_url(); ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>🚀 Cebu City National Science High School</title>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>

  <!-- Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- include summernote css/js -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom CSS -->
  <link href="public/themes/ccnshs/css/style.css?v=<?php uniqid(); ?>" rel="stylesheet">

  <!-- Fonts -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Moderustic:wght@300..800&display=swap" rel="stylesheet">

  <style>
    html {
      /* font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji"; */
      font-size: 0.9rem;
    }

    body {
      font-family: "Moderustic", sans-serif;
      font-optical-sizing: auto;
      /* font-weight: <weight>; */
      font-style: normal;
    }

    table {
      font-size: 1rem;
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
      /* font-family: "Merriweather", serif; */
      font-weight: bolder;
      font-style: normal;
    }

    footer {
      margin-top: 100px;
      padding-top: 50px;
      background: #F0F0F0;
      font-size: 0.8em;
    }

    a {
      color: #0E4C31;
    }

    a:hover,
    a:active {
      color: #0E4C31;
    }
  </style>

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
      <?php if (isset($menus)) : ?>
        <?php foreach ($menus as $menu) : ?>
          <?php if (menu_has_sub_menus($menu)) : ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink<?php echo $menu->id; ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $menu->name; ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink<?php echo $menu->id; ?>">
                <?php foreach ($menu->sub_menus as $sub_menu) : ?>
                  <?php echo anchor($sub_menu->url, $sub_menu->name, 'class="dropdown-item"'); ?>
                <?php endforeach; ?>
              </div>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <?php echo anchor($menu->url, $menu->name, 'class="nav-link"'); ?>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endif; ?>
      <?php if (session('user_id')) : ?>
        <li class="nav-item">
          <?php echo anchor('login', 'Manage my site', 'class="nav-link"'); ?>
        </li>
      <?php endif; ?>
    </ul>
    <?php echo form_open('search', array('method' => 'get')); ?>
    <div class="form-group has-search">
      <span class="fa fa-search form-control-feedback"></span>
      <?php echo form_input('q', get('q'), 'class="form-control" placeholder="Search"'); ?>
    </div>
    <?php echo form_close(); ?>
</nav>

<style>
  .has-search .form-control {
    padding-left: 2.375rem;
  }

  .has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
  }
</style>

<?php echo $content; ?>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-12">
        <img src="public/themes/ccnshs/img/ccnshs_logo_bw.png" class="img-responsive">
      </div>
      <div class="col-md-4 col-sm-12">
        <b>Cebu City National Science High School</b>
        <p>
          6000 Salvador St, Cebu City, 6000 Cebu
        </p>
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
  </div>
</footer>