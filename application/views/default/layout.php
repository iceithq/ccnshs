<head>
  <base href="<?php echo base_url(); ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>

  <!-- Custom -->
  <link rel="stylesheet" href="themes/default/css/style.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <style>
    html {
      font-size: 0.85rem;
    }

    table {
      font-size: 1em;
    }

    body {
      font-family: "Inter", sans-serif;
      font-optical-sizing: auto;
      /* font-weight: <weight>; */
      font-style: normal;
      font-variation-settings:
        "slnt" 0;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Raleway", sans-serif;
      font-optical-sizing: auto;
      font-weight: bolder;
      font-style: normal;
    }

    nav a {
      margin-right: 10px;
    }

    footer {
      margin: 100px 0 50px;
    }
  </style>

</head>

<nav>
  <h1><?php echo config_item('project_name'); ?></h1>
  <?php echo anchor('.', '<h1>' . config_item('product_name') . '</h1>'); ?>
  <ul>
    <li>
      <?php echo anchor('.', 'Home'); ?>
    </li>
    <?php foreach ($menus as $menu) : ?>
      <li>
        <?php echo anchor($menu->url, $menu->name); ?>
      </li>
    <?php endforeach; ?>
    <?php if (session('user_id')) : ?>
      <li>
        <?php echo anchor('login', 'Manage my site'); ?>
      </li>
    <?php endif; ?>
  </ul>
</nav>

<div class="container">
  <?php echo $content; ?>
</div>