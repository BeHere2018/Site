<?php include '../config.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>BeHere</title>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
		<link  rel="stylesheet" type="text/css" media="screen"  href=<?php echo $style."inscription.css"?> />
        <meta http-equiv="content-type" content="text/html" charset="UTF-8" />
 
	</head>
	<body>
        <?php include 'header.php' ?>
		<div class="container-fluid">
            <?php if(isset($erreur)){ ?>
                <h2> Une erreur est survenue:</h2>
                <h2><?php echo $erreur?></h2>
            <?php } ?>
            <div class="row">
                <div class ="col-sm-12">
                    <form action=<?php echo $controleur.'connexion.php'?> method="post" class="login">
                        <h1> Connexion </h1>
                        <div class="pourquoi_inscrire">
                            <p class="informations">Le site est pour l'instant stocké sur votre navigateur, vos données ne sont pas conservées si vous changez de machine. Une prochaine version vous permettra de conserver vos données.</p>
                        </div>
                        <fieldset class="inputs">
                            <input class="mail" type=  "text" name="mail" placeholder="Adresse mail" maxlength="40"></br>
                            <input class="password" type="password" name ="mdp" placeholder="Mot de Passe" maxlength="20"></br>
                        </fieldset>
                        <fieldset class="actions"> <!--
                            Captcha a faire une fois en prod
                            https://www.google.com/recaptcha/admin#site/340523549?setup
                            
                        <div class="g-recaptcha" data-sitekey="6Lcd-ksUAAAAANZdvBS5yz8MwWvRQi78Zm6AzrPS"></div>
                        -->
                            <input type="submit" class="btn btn-primary" value="Se connecter" >
                            <form action=<?php echo $controleur.'inscription.php' ?> method="post">
                                <input type="submit" class="btn btn-primary" value="S'incrire!" >
                            </form>
                        </fieldset>
                    </form>
            </div>
            </div>
        </div>
    <?php include 'footer.php' ?>
    </body>

</html>
