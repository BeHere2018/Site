<?php 
    include '../config.php'; 
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" media="screen" href=<?php echo $style."inscription.css"?> />
    <link rel="stylesheet" type="text/css" media="screen" href=<?php echo $style."sondage.css"?> />
    <link rel="stylesheet" type="text/css" media="screen" href=<?php echo $style."connexion.css"?> />
</head>
<body>
    <?php include 'header.php' ?>
    <div class="bloc_info">
        <h1>Questions à la populace</h1>
        <p>Si vous arrivez à prendre le temps à répondre à ces questions, cela nous permettra d'adapter l'application aux besoins ! </p>
    </div> 
    <div class="questions">
        <h2>Votre magasin</h2>
        <p>Dans quel magasins allez-vous faire vos courses pour acheter vos bières ? </p>
        <form class="questionnaire" "magasins">    
            <input type="select" list="magasins" name="magasins">
            <datalist id="magasins">
                <option value="Monoprix">
                <option value="Casino">
                <option value="G20">
                <option value="Franprix">
                <option value="Intermarché">
                <option value="E-Leclerc">
                <option value="Auchan">
                <option value="Autre...">
            </datalist>
            <input type="submit">
        </form>

        <div class="questions">
            <h2>Votre profil d'acheteur</h2>
            <p>Quel type de bière recherchez-vous ?</p>
            <div class="ensemble">
                <div class="bloc">
                    <div class="p1bloc">
                        <img class="imgprofil" src =<?php echo $style."Images/Rick.jpg"?>>
                    </div>
                    <div class = "p2bloc">
                            <h3> Intensité </h3>
                            <p> Vous recherchez des bières fortes et sans grande dignité.</p>
                            <p class="citation"> "Qu'importe le flacon pourvu qu'on ait l'ivresse"</p>
                    </div>
                </div>
                <div class="bloc">
                    <div class="p1bloc">
                        <img class="imgprofil" src =<?php echo $style."Images/Haddock.jpg"?>>
                    </div>
                    <div class = "p2bloc">
                            <h3> Qualité Intensité </h3>
                            <p> Vous recherchez des bières fortes, mais vous avez des principes que vous souhaitez respecter.</p>
                            <p class="citation"> "La seule arme qui m'intéresse, c'est le décapsuleur"</p>
                    </div>
                </div>
                <div class="bloc">
                    <div class="p1bloc">
                        <img class="imgprofil" src =<?php echo $style."Images/Bender.jpg"?>>
                    </div>
                    <div class = "p2bloc">
                            <h3> Qualité Prix </h3>
                            <p> Vous recherchez des de bonne qualité, mais accessibles.</p>
                            <p class="citation"> "La Bavaria ? Très peu pour moi"</p>
                    </div>
                </div>
                <div class="bloc">
                    <div class="p1bloc">
                        <img class="imgprofil" src =<?php echo $style."Images/archer.jpg"?>>
                    </div>
                    <div class = "p2bloc">
                            <h3> Qualité </h3>
                            <p> Vous recherchez la perle rare.</p>
                            <p class="citation"> "La bière, c'est la boisson des pauvres... Alors je prendrai de la bière chère, mais bonne."</p>
                    </div>
                </div>
            </div>
            <p>Choisissez votre/vos profil(s) type(s)</p>
            <form class="questionnaire" "profil">
                <label class="container"> L'intensité !
                    <input type="checkbox" name="Arome" value="Intensité" >
                    <span class="checkmarkcheck"></span>
                </label><br>
                <label class="container"> La Qualité Intensité
                    <input type="checkbox" name="Arome" value="Intensité" >
                    <span class="checkmarkcheck"></span>
                </label><br>
                <label class="container"> La Qualité Prix
                    <input type="checkbox" name="Arome" value="Intensité" >
                    <span class="checkmarkcheck"></span>
                </label><br>
                <label class="container"> La Qualité
                    <input type="checkbox" name="Arome" value="Intensité" >
                    <span class="checkmarkcheck"></span>
                </label><br>
                <input type="submit">
            </form>
        </div>  

</div>
</body>
    <?php include 'footer.php' ?>
</html>