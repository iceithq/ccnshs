<div class="jumbotron jumbotron-fluid" style="background: linear-gradient(to right, #0E4C31, #0E4C31), no-repeat center center; background-size: cover;margin-bottom:0">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12 mb-3">
        <span class="country">Republic of the Philippines</span><br>
        <span class="department">Department of Education</span><br>
        <span class="school">CEBU CITY NATIONAL SCIENCE HIGH SCHOOL</span>
      </div>
      <div class="col-md-6 col-sm-12 text-right">
        <small class="date">
          Today is,
          <?php echo date('l, F j, Y, g:i:s A'); ?>
        </small>
      </div>
    </div>
    <!-- <h1 class="display-4">Hello, world!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> -->
  </div>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="public/themes/ccnshs/img/hero/01.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="public/themes/ccnshs/img/hero/02.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="public/themes/ccnshs/img/hero/03.png">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="container mt-3">
  <?php recent_posts(); ?>

  <?php recent_posts(); ?>
</div>

<style>
  .jumbotron {
    padding-top: 32px;
    padding-bottom: 32px;

    font-family: "Merriweather", serif;
    font-weight: 700;
    font-style: normal;
    color: white;
  }

  .jumbotron .country,
  .jumbotron .date {
    font-size: 0.7em;
  }

  .jumbotron .department {
    font-size: 1.8em;
  }
</style>