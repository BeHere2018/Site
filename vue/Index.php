<?php include '../config.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>BeHere</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link  rel="stylesheet" type="text/css" media="screen"  href=<?php echo $style."notation.css"?> />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>

        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="#">BeHere Notation</a>
            <div class="navbar-nav" id="navbarNav">
                <a class="nav-item nav-link" href=<?php echo $controleur."traitement.php" ?>>Accueil <span class="sr-only">(current)</span></a>
            </div>
        </nav>
		<div class="container-fluid">
			<div class="row" id="intro">
                <h3>Bonjour à tous et bienvenue sur notre site de collecte de données concernant les bières ! </h3>
                <h4>Nous vous remercions pour votre avis.
                </br> Il est pour l'instant stocké sur votre navigateur, ainsi un changement de navigateur, de pc ou un passage sur smartphone vous fera perdre votre expérience. Mais ne vous inquiétez pas ! Une prochaine version vous permettra de conserver vos données.
                </h4>
			</div>
            <?php if(isset($erreur)){ ?>
                <h2> Une erreur est survenue:</h2>
                <h2><?php echo $erreur?></h2>
            <?php } ?>
            <div class="row">
                <div class ="col-sm-12">
                <form action=<?php echo $controleur.'connexion.php'?> method="post">
                <br>
                <h3> Votre mail:</h3>
                 <input type=  "text" name="mail"></br>
                <h3> Votre mot de passe :</h3>
                 <input type="password" name ="mdp"></br>
                <input type="submit" class="btn btn-primary" value="C'est parti !" >
                </form>
                <br>
                <form action=<?php echo $controleur.'inscription.php' ?> method="post">
                <input type="submit" class="btn btn-primary" value="S'incrire!" >
                </form>
                </br>
            </div>
            </div>
        </div>
        <footer class="container-fluid bg-4 text-center">
			<!--
				<p>Visual Effects Made By <a href="https://www.nicolas-meneux.fr">www.nicolas-meneux.fr</a></p> 
			-->
			<a href=<?php echo $vue."conditions_generales.php"?>>Conditions générales</a>
			</footer>
	</body>
</html>
