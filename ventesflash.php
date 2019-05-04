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
<h2 class="panier"><img src="img/icon/flash.png" width="40" height="40"/> Vente flash de la semaine <img src="img/icon/flash.png" width="40" height="40"/></h2>
    <br><br>
    
    <!-- Contient toutes les ventes flash-->
    
    <div class="container">
		<div class="row">
            
    <!-- Contient les ventes flash cat livre-->
    
    <div class="roman-liv">
        <h4 style="color: slategret; margin-left: 40%;">Livre</h4>
  
  <div class="bd-example">

  <div id="venteflash" class="carousel slide" data-ride="carousel" >

    <ol class="carousel-indicators">
      <li data-target="#venteflash" data-slide-to="0" class="active"></li>
      <li data-target="#venteflash" data-slide-to="1"></li>
      <li data-target="#venteflash" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="img/roman/eragon.jpg" class="img-article" alt="bestsellerlivre1" width="208" height="299">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="carousel-titre">Eragon</h5>
          <p class="carousel-descrip">MUST READ OMG</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/roman/harrypotter.jpg" class="img-article" alt="bestsellerlivre2" height="314" width="208">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="carousel-titre">Harry Potter</h5>
          <p>INCROYABLE</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/roman/snk.jpeg" class="img-article" alt="bestsellerlivre3" height="314" width="208">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="carousel-titre">SnK</h5>
          <p class="carousel-descrip">TROBO</p>
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

        </div><br>
        <div class="qt-box">
            
                    <button type="button" id="qt-moins" class="btn-qt" onClick="calcQuantiteMoins()"><img src="minus.png" height="15" width="15"/></button>
                    
                    <input type="text" value="1" id="quantite-art"/>
                    
                    <button type="button" id="qt-plus" class="btn-qt" onClick="calcQuantitePlus()"><img src="plus.png" height="15" width="15"/></button>
                </div>
            <button type="submit" class="btn btn-danger bouton-article" name="addToCart">Ajouter au panier</button>
            </div>
            
            
    <!--Separateur categorie-->
    <div class="col-sm-1"></div>
            
            
        <!-- Contient les ventes flash cat musique-->
    
    <div class="roman-liv">
        <h4 style="color: slategret; margin-left: 40%;">Musique</h4>
  
  <div class="bd-example">

  <div id="venteflash2" class="carousel slide" data-ride="carousel" >

    <ol class="carousel-indicators">
      <li data-target="#venteflash2" data-slide-to="0" class="active"></li>
      <li data-target="#venteflash2" data-slide-to="1"></li>
      <li data-target="#venteflash2" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="img/musique/kpop.png" class="img-article" alt="bestsellerlivre" width="208" height="208">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="carousel-titre">Eragon</h5>
          <p class="carousel-descrip">MUST READ OMG</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/musique/kpop.png" class="img-article" alt="bestsellermusique" height="208" width="208">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="carousel-titre">Harry Potter</h5>
          <p>INCROYABLE</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/musique/kpop.png" class="img-article" alt="..." height="208" width="208">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="carousel-titre">SnK</h5>
          <p class="carousel-descrip">TROBO</p>
        </div>
        </div>



    </div>

    <a class="carousel-control-prev" href="#venteflash2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#venteflash2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>

        </div>
            <br>
            <div class="qt-box">
            
                    <button type="button" id="qt-moins" class="btn-qt" onClick="calcQuantiteMoins()"><img src="minus.png" height="15" width="15"/></button>
                    
                    <input type="text" value="1" id="quantite-art"/>
                    
                    <button type="button" id="qt-plus" class="btn-qt" onClick="calcQuantitePlus()"><img src="plus.png" height="15" width="15"/></button>
                </div>
            <button type="submit" class="btn btn-danger bouton-article" name="addToCart">Ajouter au panier</button>
            </div>
            
            
            
        <!--Separateur categorie-->
    <div class="col-sm-1"></div>
            
            
        <!-- Contient les ventes flash cat vetement-->
    
    <div class="roman-liv">
        <h4 style="color: slategret; margin-left: 40%;">Vetements</h4>
  
  <div class="bd-example">

  <div id="venteflash3" class="carousel slide" data-ride="carousel" >

    <ol class="carousel-indicators">
      <li data-target="#venteflash3" data-slide-to="0" class="active"></li>
      <li data-target="#venteflash3" data-slide-to="1"></li>
      <li data-target="#venteflash3" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="img/vetements/jean.jpg" class="img-article" alt="bestsellerlivre" width="208" height="277">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="carousel-titre">Eragon</h5>
          <p class="carousel-descrip">MUST READ OMG</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/vetements/jean.jpg" class="img-article" alt="bestsellermusique" height="277" width="208">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="carousel-titre">Harry Potter</h5>
          <p>INCROYABLE</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/vetements/jean.jpg" class="img-article" alt="..." height="277" width="208">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="carousel-titre">SnK</h5>
          <p class="carousel-descrip">TROBO</p>
        </div>
        </div>



    </div>

    <a class="carousel-control-prev" href="#venteflash3" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#venteflash3" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>

        </div>
        <br>
        <div class="qt-box">
            
                    <button type="button" id="qt-moins" class="btn-qt" onClick="calcQuantiteMoins()"><img src="minus.png" height="15" width="15"/></button>
                    
                    <input type="text" value="1" id="quantite-art"/>
                    
                    <button type="button" id="qt-plus" class="btn-qt" onClick="calcQuantitePlus()"><img src="plus.png" height="15" width="15"/></button>
                </div>
        <button type="submit" class="btn btn-danger bouton-article" name="addToCart">Ajouter au panier</button>
            </div>
    
    </div></div>
    <br><br>

  <?php
  require "footer.php"
  ?>
</body>
</body>
</html>