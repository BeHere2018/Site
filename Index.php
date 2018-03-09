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
		<link href="index.css?v=<?php echo time();?>" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		<div class="main">
			<div class="Intro">
				<h3>Bonjour à tous est bienvenue sur notre site de collecte de données concernant les bières
                <br>Il y a deux modes disponibles : 
                <br>le mode anonyme pour répondre au plus vite et sans être interessé par les bonus 
                <br>le mode connexion pour gagner des bonus sur notre futur application</h3>
			</div>
            <?php if(isset($erreur)){ ?>
                <h2> Une erreur est survenue:</h2>
                <h2><?php echo $erreur?></h2>
            <?php } ?>
            <form action='Connexion.php' method="post">
            <br>
            <input type="submit" value="C'est parti !" >
            </form>
            </div>
		</div>
	</body>
</html>
