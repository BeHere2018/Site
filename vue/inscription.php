<?php include "../config.php"; ?>
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<form action=<?php echo $controleur.'inscription.php'; ?> method="post">
    <br>
    <h3> Votre mail:</h3>
    <input type=  "text" name="mail" maxlength="40"></br>
    <h3> Votre mot de passe :</h3>
    <input type="password" name ="mdp" maxlength="20"></br>
    <!--
        captcha a faire une fois en prod
        https://www.google.com/recaptcha/admin#site/340523549?setup
        -->
    <div class="g-recaptcha" data-sitekey="6Lcd-ksUAAAAANZdvBS5yz8MwWvRQi78Zm6AzrPS"></div>
    <input type="submit" class="btn btn-primary" value="C'est parti !" >
</form>
<footer class="container-fluid bg-4 text-center">
<!--
    <p>Visual Effects Made By <a href="https://www.nicolas-meneux.fr">www.nicolas-meneux.fr</a></p> 
-->
<a href=<?php echo $vue."conditions_generales.php"?>>Conditions générales</a>
</footer>