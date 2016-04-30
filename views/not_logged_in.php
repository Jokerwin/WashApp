<?php include('_header.php');
require_once(__ROOT__.'/config.php'); 
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <?php
  echo '
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="'. $site_url .'/images/3.png" alt="Chania">
    </div>

    <div class="item">
      <img src="'. $site_url .'/images/4.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="'. $site_url .'/images/3.jpg" alt="Chania">
    </div>
  </div>
  ';
  ?>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php include('_footer.php'); ?>
