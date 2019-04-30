
<!DOCTYPE html>
<html>
<head>
	<title>Header</title>

	<script type="text/javascript">     
	 $(document).ready(function(){           
	 $('.header').height($(window).height());  

	}); 
	</script>
</head>
<body>

	<header class="page-header header container-fluid"> <!--container fluid prend la largeur totale de l'écran environ 960 pixel-->
			<div class="overlay"></div>
			<div class="description">       
				<h1>Bienvenue dans ECE Amazon</h1> 

				<!--Check si une session est ouverte-->
				<?php
				if(isset($_SESSION['username'])){
					echo "<p> Content de vous revoir! </p>".$_SESSION['username'];


				}
				else{

				}

				?>               
			</div>
	</header> 

</body>
</html>