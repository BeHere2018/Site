<?php
if(!isset($_COOKIE['id'])){
$cookie_value="DBT".rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9)."AZT";
$cookie_name='id';
setcookie($cookie_name, $cookie_value, time() + (86400 * 1500), "/");
include 'put_personne.php';
put_personne($cookie_value);
//$adresse_ip = $_SERVER['REMOTE_ADDR'];
}


?>


<!DOCTYPE html>
<html>
	<head>
		<title>BeHere</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link  rel="stylesheet" type="text/css" media="screen"  href="./style/notation.css" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>

        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="#">BeHere Notation</a>
            <div class="navbar-nav" id="navbarNav">
                <a class="nav-item nav-link" href="traitement.php">Accueil <span class="sr-only">(current)</span></a>
            </div>
        </nav>
		<div class="container-fluid">
			<div class="row" id="intro">
				<h3>Bonjour à tous est bienvenue sur notre site de collecte de données concernant les bières
                <br>Il y a deux modes disponibles : 
                <br>le mode anonyme pour répondre au plus vite et sans être interessé par les bonus 
                <br>le mode connexion pour gagner des bonus sur notre futur application</h3>
			</div>
            <?php if(isset($erreur)){ ?>
                <h2> Une erreur est survenue:</h2>
                <h2><?php echo $erreur?></h2>
            <?php } ?>
            <div class="row">
                <div class ="col-sm-12">
                <form action='Connexion.php' method="post">
                <br>
                <input type="submit" class="btn btn-primary" value="C'est parti !" >
                </form>
            </div>
            </div>
        </div>
        <footer class="container-fluid bg-4 text-center">
  		    <p>Visual Effects Made By <a href="https://www.nicolas-meneux.fr">www.nicolas-meneux.fr</a></p> 
	    </footer>   
	</body>
</html>
