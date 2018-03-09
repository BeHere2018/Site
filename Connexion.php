<?php 
if(!isset($_COOKIE['id'])){
	$cookie_value=file_get_contents('https://www.random.org/cgi-bin/randbyte?nbytes=15&format=h');
	$cookie_name='id';
	setcookie($cookie_name, $cookie_value, time() + (86400 * 1500), "/");
	include 'put_personne.php';
	put_personne($cookie_value);
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
			</div>
			
			<div class="row">
			<?php 
				$biere=get_biere('Anonymous');?>
				<h4>Vous notez  la <?php echo $biere[1]; ?> :  <img src="http://www.lsa-conso.fr/mediatheque/3/1/0/000025013.jpg" onclick = "onClickHide(1)"></img></h4>
			</div>	
			<div class = "row" id="notation<?php echo $biere[0]; ?>" style="display:none">
				<div onclick = "onClickHide2(1)">
					<h2>Partie Obligatoire : </h2>
					<div class = "radio">
						<a> Note</a>
						<input type="radio" name="Note" value="0" > Imbuvable
						<input type="radio" name="Note" value="1" > Limite
						<input type="radio" name="Note" value="2" > Passable / Buvable
						<input type="radio" name="Note" value="3" > Assez bonne
						<input type="radio" name="Note" value="4" > Bonne
						<input type="radio" name="Note" value="5" > Très bonne
						<input type="radio" name="Note" value="6" > Excellente
						<br>
					</div>
				</div>
				<div id="facultatif<?php echo $biere[0]; ?>" style="display:none">
					<h2>Partie Facultative :</h2>
					<div class = "radio">
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
							<input id="mail" name="mail" type="hidden" value="Anonymous">
							<input id="idbiere" name="idbiere" type="hidden" value="<?php echo $biere[0]?>">
							<br>
					</div>
				</div>
			</div>
			<div class="row">
				<form action='Traitement.php' method="post">
					<input  class="btn btn-primary"  type="submit" value="voter" />		
				</form>
			</div>
			<script>
				var idBiere = '<?php echo $biere[0] ?>';
				var idDiv = idBiere;
				$('.notationC').append('<div id='+idDiv+'></div><br/>');
			</script>
			<div class="row">
				<form action='Traitement.php' method="post">
					<input id="mail" name="mail" type="hidden" value="Anonymous">
					<input  class="btn btn-danger"  type="submit" value="Je ne connais pas cette bière" />
				</form>
			</div>
		</div>

	<script>
		

		function onClickHide(num_biere) {
			var id = num_biere
			var x = document.getElementById("notation"+num_biere);
			//document.write(idBiere)
			if (x.style.display === "block") {
				x.style.display = "none";
			} else {
				x.style.display = "block";
			}
		}
		function onClickHide2(num_biere) {
			var x = document.getElementById("facultatif"+num_biere);
			if (x.style.display === "block") {
				x.style.display = "none";
			} else {
				x.style.display = "block";
			}
		}
	</script>

	<footer class="bg-4 text-center">
  		<p>Visual Effects Made By <a href="https://www.nicolas-meneux.fr">www.nicolas-meneux.fr</a></p> 
	</footer>
	</body>
</html>
