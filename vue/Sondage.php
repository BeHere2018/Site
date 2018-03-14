<?php include '../config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" media="screen" href=<?php echo $style."inscription.css"?> />
    <link rel="stylesheet" type="text/css" media="screen" href=<?php echo $style."sondage.css"?> />
</head>
<body>
    <div class="bloc_info">
        <h1>Questions à la populace</h1>
        <p>Si vous arrivez à prendre le temps à répondre à ces questions, cela nous permettra d'adapter l'application aux besoins ! </p>
    </div> 
    <div class="questions">
        <p>Dans quel magasins allez-vous faire vos courses pour acheter vos bières ? </p>
        <form>    
            <input list="magasins" name="magasins">
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
</div>
</body>
</html>