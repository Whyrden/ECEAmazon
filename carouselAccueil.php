<!DOCTYPE html>
<html>
<head>
	<title>PROJET WEB DYNAMIQUE</title>
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

    <body>
    
      <div id="carouselAccueil" class="carousel slide" data-ride="carousel">
        
        <ol class="carousel-indicators">
            <li data-target="#carouselAccueil" data-slide-to="0" class="active"></li>
            <li data-target="#carouselAccueil" data-slide-to="1"></li>
            <li data-target="#carouselAccueil" data-slide-to="2"></li>
        </ol>
          
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="frenchdays.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="vendeur.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="piano.jpg" alt="Third slide">
            </div>
        </div>
          
        <a class="carousel-control-prev" href="#carouselAccueil" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
          
        <a class="carousel-control-next" href="#carouselAccueil" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
 </body>
    
</html>