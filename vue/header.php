<head>
    <link  rel="stylesheet" type="text/css" media="screen"  href=<?php echo $style."header_footer.css"?> />     
    <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/themes/smoothness/jquery-ui.css" />
</head>
    <nav class="navbar">
        <center><a class="navbar-brand">BeHere</a></center>
        <div class="navbar-nav" id="Topnav">
            <ul>
            <?php 
                    if (isset($_COOKIE['id'])){ ?> 
                    <li><a class="nav-item" href=<?php echo $controleur."connexion.php" ?>>Les bières</a></li>
                    <li><a class="nav-item" href=<?php echo $controleur."sondage.php" ?>>Aidez-nous !</a></li>
                    <li><a class="nav-item" href=<?php echo $controleur."deconnexion.php" ?>>Deconnexion</a></li>
                        
                <?php
                    }else{
                ?>
                <li><a class="nav-item" href=<?php echo $controleur."index.php" ?>>Accueil</a></li>
                <li><a class="nav-item" href=<?php echo $controleur."connexion.php" ?>>Connexion</a></li>
                <li><a class="nav-item" href=<?php echo $controleur."inscription.php" ?>>Inscription </a></li>

                <?php
                    }
                ?>
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