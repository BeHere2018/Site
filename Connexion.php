<?php 
if(!isset($_COOKIE['id'])){
	$cookie_value="DBT".rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9)."AZT";
	$cookie_name='id';
	setcookie($cookie_name, $cookie_value, time() + (86400 * 1500), "/");
	include 'put_personne.php';
	put_personne($cookie_value);
	//$adresse_ip = $_SERVER['REMOTE_ADDR'];
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>BeHere</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link  rel="stylesheet" type="text/css" media="screen"  href="./style/notation.css" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>

<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">BeHere Notation</a>
  <div class="navbar-nav" id="navbarNav">
	  <a class="nav-item nav-link" href="traitement.php">Accueil <span class="sr-only">(current)</span></a>
  </div>
</nav>

	<?php include'Get_biere.php';?>
		<div class="container fluid">
			<div class ="row">
			<h1>Bienvenue sur notre humble page de notation de céréales liquides !</h1>
			</div>
			<div class="row">
				<?php 
				if(!function_exists("get_xp")){
				include'update_Xp.php';
				}
				$xp=get_xp($_COOKIE['id']);
				$lvl=floor($xp[0]/100);
				?>
				<h3>Vous êtes actuellement niveau <?php echo $lvl; ?>, et à <?php echo $xp[0]-100*$lvl; ?> % du niveau actuel :)
				</h3>
				<h4>Pour sélectionner une bière, cliquez sur son image</h4>	
			</div>
			
			<div class="row">
			<div class="col-sm-3"
			<?php 
				$bieres=get_x_biere(10);
				foreach($bieres as $biere){

				?>
				<h4> <?php echo $biere[1];?><img src=<?php echo $biere[2];?> onclick = "onClickHide(<?php echo $biere[0];?>)"></img></h4>
			</div>	
			<div class = "col-sm-8" id="notation<?php echo $biere[0]; ?>" style="display:none">
			<form action='Traitement.php' method="post">
				<div onclick = "onClickHide2(<?php echo $biere[0];?>)">
					<h2>Notation : </h2>
					<div class = "radio col-sm-9">
					<a> Votre appréciation générale de la bière : </a>
						<br>
						<input type="radio" name="Note" value="0" > Imbuvable
						<input type="radio" name="Note" value="1" > Limite
						<input type="radio" name="Note" value="2" > Passable / Buvable
						<input type="radio" name="Note" value="3" > Assez bonne
						<br>
						<input type="radio" name="Note" value="4" > Bonne
						<input type="radio" name="Note" value="5" > Très bonne
						<input type="radio" name="Note" value="6" > Excellente
						<br>
					</div>
				</div>
				<div id="facultatif<?php echo $biere[0]; ?>" style="display:none">
					<h2>Notation Précise :</h2>
					<div class = "radio col-sm-9">
						<a>Arôme</a>
							<input type="radio" name="Arome" value="-1" checked> Non Noté
							<input type="radio" name="Arome" value="0" > 0
							<input type="radio" name="Arome" value="1" > 1
							<input type="radio" name="Arome" value="2" > 2
							<input type="radio" name="Arome" value="3" > 3
							<input type="radio" name="Arome" value="4" > 4
							<input type="radio" name="Arome" value="5" > 5
							<br>
						<a>Goût</a>
							<input type="radio" name="Gout" value="-1" checked> Non Noté
							<input type="radio" name="Gout" value="0" > 0
							<input type="radio" name="Gout" value="1" > 1
							<input type="radio" name="Gout" value="2" > 2
							<input type="radio" name="Gout" value="3" > 3
							<input type="radio" name="Gout" value="4" > 4
							<input type="radio" name="Gout" value="5" > 5
							<br>
						<a>Palais</a>
							<input type="radio" name="Palais" value="-1" checked> Non Noté
							<input type="radio" name="Palais" value="0" > 0
							<input type="radio" name="Palais" value="1" > 1
							<input type="radio" name="Palais" value="2" > 2
							<input type="radio" name="Palais" value="3" > 3
							<input type="radio" name="Palais" value="4" > 4
							<input type="radio" name="Palais" value="5" > 5
							<br>
						<a>Apparence</a>
							<input type="radio" name="Apparence" value="-1" checked> Non Noté
							<input type="radio" name="Apparence" value="0" > 0
							<input type="radio" name="Apparence" value="1" > 1
							<input type="radio" name="Apparence" value="2" > 2
							<input type="radio" name="Apparence" value="3" > 3
							<input type="radio" name="Apparence" value="4" > 4
							<input type="radio" name="Apparence" value="5" > 5
							<br>
							<input id="mail" name="mail" type="hidden" value=<?php echo $_COOKIE['id']?>>
							<input id="idbiere" name="idbiere" type="hidden" value='<?php echo $biere[0]; ?>'>
							<br>
							<div class ="col-sm-12" id="valider la note" >
								<button type="button" class="btn btn-info" onclick = "onClickHide(1)">Valider ma réponse</button>
							</div>	
					</div>
				</div>
				
			</div>

			</div>
			<div class="row">
					<input  class="btn btn-primary"  type="submit" value="Envoyer mes avis !" />		
				</form>
			</div>
			</form>
				<?php
			}
			 ?>
			<script>
				var idBiere = '<?php echo $biere[0] ?>';
				var idDiv = idBiere;
				$('.notationC').append('<div id='+idDiv+'></div><br/>');
			</script>
		</div>

	<script>
		

		function onClickHide(num_biere) {
			var id = num_biere
			var x = document.getElementById("notation"+num_biere);
			if (x.style.display === "block") {
				x.style.display = "none";
			} else {
				x.style.display = "block";
			}
		}
		function onClickHide2(num_biere) {
			var x = document.getElementById("facultatif"+num_biere);
			if (x.style.display === "none") {
				x.style.display = "block";
			} else {
				x.style.display = "block";
			}
		}
	</script>

	<footer class="container-fluid bg-4 text-center">
  		<p>Visual Effects Made By <a href="https://www.nicolas-meneux.fr">www.nicolas-meneux.fr</a></p> 
	</footer>
	</body>
</html>
