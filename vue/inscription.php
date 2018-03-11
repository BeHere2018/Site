<?php include "../config.php"; ?>
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
<meta charset="utf-8" />
<link rel="stylesheet" href="../style/inscription.css"/>
</head>
<body>
    <form action=<?php echo $controleur.'inscription.php'; ?> class="login" method="post">
        <h1>Inscription </h1>
        <p class="informations"> S'inscrire vous permet de garder vos données pour vos diverses connexions et de garder vos points d'expérience pour le lancement de l'application</p>
        
        <fieldset class="inputs">
            <input class="mail" type=  "text" name="mail" placeholder="Adresse mail" maxlength="40"></br>
            <input class="password" type="password" name ="password" placeholder="Mot de Passe" maxlength="20"></br>
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
        
    <footer class="container-fluid bg-4 text-center">
    <q class="citation">Montre-moi ta bière, je te dirai qui tu es.</q>
    <br/>
    <a href=<?php echo $vue."conditions_generales.php"?>>Conditions générales</a>
    </footer>    
    </form>



</body>