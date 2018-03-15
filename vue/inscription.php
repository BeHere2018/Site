<?php 
    //include "../config.php";
 ?>
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
<meta charset="utf-8" />
<link rel="stylesheet" href="<?php echo $style;?>inscription.css"/>
</head>
<body>
    <?php include 'header.php' ?>
    <form action=<?php echo $controleur.'inscription.php'; ?> class="login" method="post">
        <h1>Inscription </h1>
        <div class="pourquoi_inscrire">
            <p class="informations"> S'inscrire pour :</p>
                <ul>
                    <li><img src="<?php echo $style;?>Images/Experience.png">Gagner de l'XP</li>
                    <li><img src="<?php echo $style;?>Images/Sauvegarde.png">Sauvegarder ses votes</li>
                    <li><img src="<?php echo $style;?>Images/Votes.png">Retrouver des recommandations pour l'application finale</li>
                    <li><img src="<?php echo $style;?>Images/Recommandation.png">Accéder au plus vite à une Recommandation intelligente</li>
                </ul>
        </div>
        <?php if(isset($erreur)){?>
        <p><?php echo $erreur ?></p>
        <?php
        }?>
        <fieldset class="inputs">
            <input class="mail" type=  "text" name="mail" placeholder="Adresse mail" maxlength="40"></br>
            <input class="password" type="password" name ="mdp" placeholder="Mot de Passe" maxlength="20"></br>
            <input class="confirm_pass" type="password" name="confirm_pass" placeholder="Confirmez Mot de Passe" maxlength="20"></br>
            <div class="g-recaptcha" data-sitekey="6Lcd-ksUAAAAANZdvBS5yz8MwWvRQi78Zm6AzrPS"></div>
        </fieldset>
        <fieldset class="actions">
            <input type="submit" class="btn btn-primary" value="C'est parti !" >
        </fieldset>
        <!--
            captcha a faire une fois en prod
            https://www.google.com/recaptcha/admin#site/340523549?setup
            -->
    

    
    </form>
</body>
<?php include 'footer.php' ?>

