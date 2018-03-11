<?php include "../config.php"; ?>
<form action=<?php echo $controleur.'inscription.php'; ?> method="post">
<br>
<h3> Votre mail:</h3>
<input type=  "text" name="mail"></br>
<h3> Votre mot de passe :</h3>
<input type="password" name ="mdp"></br>
<input type="submit" class="btn btn-primary" value="C'est parti !" >
</form>
<footer class="container-fluid bg-4 text-center">
<!--
    <p>Visual Effects Made By <a href="https://www.nicolas-meneux.fr">www.nicolas-meneux.fr</a></p> 
-->
<a href=<?php echo $vue."conditions_generales.php"?>>Conditions générales</a>
</footer>