<?php

if(!isset($_COOKIE['id'])){
$cookie_value=file_get_contents('https://www.random.org/cgi-bin/randbyte?nbytes=50&format=h');
$cookie_name='id';
setcookie($cookie_name, $cookie_value, time() + (86400 * 1500), "/");
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
            <div class="bouton">
            <form action='Anonyme.php' method="post">
            <input type="submit" value="Mode Anonyme">
            </form>
            <form action='Preconnexion.php' method="post">
            <input id="mail" name="mail" placeholder="Votre adresse mail" />
            <br>
            <input type="submit" value="Connexion" >
            </form>
            </div>
		</div>
	</body>
</html>
