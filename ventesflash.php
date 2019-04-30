<!DOCTYPE html>
<html>

<head>
  <title>Ventes Flash</title>
<meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">    

  <!--Bootstraps css--> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  

  <!--Jquery first then Bootstraps js-->          
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <!--my CSS-->
  <link rel="stylesheet" type="text/css" href="monstyle.css"> 

</head>

<header class="page-header header container-fluid"> 

</header>

<body>
<?php
  require "nav.php"
  ?>
    
    <br><br>
<h2 class="panier"><img src="flash.png" width="40" height="40"/> Vente flash de la semaine <img src="flash.png" width="40" height="40"/></h2>
    <br><br>
  
  <div class="bd-example">

  <div id="venteflash" class="carousel slide" data-ride="carousel"  style="width: 400px; margin: 0 auto">

    <ol class="carousel-indicators">
      <li data-target="#venteflash" data-slide-to="0" class="active"></li>
      <li data-target="#venteflash" data-slide-to="1"></li>
      <li data-target="#venteflash" data-slide-to="2"></li>
      <li data-target="#venteflash" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="eragon.jpg" class="d-block w-100" alt="bestsellerlivre">
        <div class="carousel-caption d-none d-md-block">
          <h5>Livres</h5>
          <p>MUST READ OMG</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="kpop.png" class="d-block w-100" alt="bestsellermusique">
        <div class="carousel-caption d-none d-md-block">
          <h5>Musique</h5>
          <p>INCROYABLE</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="jean.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Vêtements</h5>
          <p>TROBO</p>
        </div>
        </div>

      <div class="carousel-item">
        <img src="kimono.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Sports et loisirs</h5>
          <p>WOW</p>
        </div>
        </div>

    </div>

    <a class="carousel-control-prev" href="#venteflash" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#venteflash" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>

</div><br><br>

  <?php
  require "footer.php"
  ?>
</body>
</body>
</html>