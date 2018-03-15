<head>
    <link  rel="stylesheet" type="text/css" media="screen"  href=<?php echo $style."header_footer.css"?> />     
    <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/themes/smoothness/jquery-ui.css" />
</head>
    <nav class="navbar">
        <center><a class="navbar-brand">BeHere</a></center>
        <div class="navbar-nav" id="Topnav">
            <ul>
                <li><a class="nav-item" href=<?php echo $controleur."traitement.php" ?>>Accueil</a></li>
                <li><a class="nav-item" href=<?php echo $controleur."connexion.php" ?>>Connexion</a></li>
                <li><a class="nav-item" href=<?php echo $controleur."inscription.php" ?>>Inscription </a></li>
                <li><a class="nav-item" href=<?php echo $controleur."index.php" ?>>Index</a></li>
                <li><a class="nav-item" href=<?php echo $vue."Sondage.php" ?>>Aidez-nous !</a></li>
                <li><a class="nav-item" href=<?php echo $controleur."Deconnexion.php" ?>>Deconnexion</a></li>
                <li><a href="javascript:void(0);" class="icon" onclick="affichMenu()">&#9776;</a>
            </ul>
        </div>
        

       
    </nav>
    <div class="under_navbar">
    </div>




	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js"></script>
    <script>
        function affichMenu() {
            var x = document.getElementById("Topnav");
            if (x.className === "navbar-nav") {
                x.className += " responsive";
            } else {
                x.className = "navbar-nav";
            }
        }
        



    </script>