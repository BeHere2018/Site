<?php include '../config.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>BeHere</title>
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
		<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
		<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
		<!-- <link  rel="stylesheet" type="text/css" media="screen"  href=<?php echo $style."notation.css?".rand(0,10)?> /> -->
		<link rel="stylesheet" type="text/css" media="screen" href="../style/connexion.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../style/inscription.css" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>

	<?php include 'header.php' ?>

	<?php include $modele.'Get_biere.php';?>
		<div class="container fluid">
			<div class="row">
				<?php 
					if(!function_exists("get_xp")){
					include $modele.'update_Xp.php';
					}
					if(isset($_COOKIE['id'])){
					$xp=get_xp_fromToken($_COOKIE['id']);
					$lvl=floor($xp[0]/100);
					}else{
					$xp=0;
					$lvl=0;
					}
				?>
			<div class="bloc_info">	
				<h1>Bienvenue sur notre humble page de notation de Céréales Liquides !</h1>
				<p class="informations">Vous êtes actuellement niveau <?php echo $lvl; ?>, et à <?php echo $xp[0]-100*$lvl; ?> % du niveau actuel. </br>Pour sélectionner une bière, cliquez sur son image</p>	
			</div>
		</div>
			<div class="row">
				<div class="col-sm-3">
					<?php 
						$bieres=get_x_biere(9);
						$i=0;
						foreach($bieres as $biere){
							if($i%3==0){
								echo "</br>";
							}
					?>
					<div class="biere">
					<div class="nom_biere"  onclick = "onClickHide(<?php echo $biere[0];?>)">
					<img src=<?php echo $biere[2];?> ></img><br>
					<b> <?php echo $biere[1] ?> </b>
					</div>
				<div class = "notation" id="notation<?php echo $biere[0]; ?>" style="display:none">
					<form action=<?php echo $controleur.'Traitement.php' ?> method="post">
						<div class = "notation" onclick = "onClickHide2(<?php echo $biere[0];?>)">
							<h2>Notation : </h2>
							<div class = "radio_gen">
								<a> Votre appréciation générale de la bière : </a>
								<br>
								<input type="radio" name="Note" value="0" > Imbuvable</br>
								<input type="radio" name="Note" value="1" > Limite</br>
								<input type="radio" name="Note" value="2" > Passable</br>
								<input type="radio" name="Note" value="3" > Assez bonne</br>
								<input type="radio" name="Note" value="4" > Bonne</br>
								<input type="radio" name="Note" value="5" > Très bonne</br>
								<input type="radio" name="Note" value="6" > Excellente</br>
								<br>
							</div>
						</div>
						<div class="precis" id="facultatif<?php echo $biere[0]; ?>" style="display:none">
							<h2>Notation Précise :</h2>
							<div class = "radio_prec">
								<a>Arôme</a>
								<input type="radio" name="Arome" value="-1" checked> Non Noté
								<br>
								<input type="radio" name="Arome" value="0" > 0
								<input type="radio" name="Arome" value="1" > 1
								<input type="radio" name="Arome" value="2" > 2
								<input type="radio" name="Arome" value="3" > 3
								<input type="radio" name="Arome" value="4" > 4
								<input type="radio" name="Arome" value="5" > 5
								<br>
								<a>Goût</a>
								<input type="radio" name="Gout" value="-1" checked> Non Noté
								<br>
								<input type="radio" name="Gout" value="0" > 0
								<input type="radio" name="Gout" value="1" > 1
								<input type="radio" name="Gout" value="2" > 2
								<input type="radio" name="Gout" value="3" > 3
								<input type="radio" name="Gout" value="4" > 4
								<input type="radio" name="Gout" value="5" > 5
								<br>
								<a>Apparence</a>
								<input type="radio" name="Apparence" value="-1" checked> Non Noté
								<br>
								<input type="radio" name="Apparence" value="0" > 0
								<input type="radio" name="Apparence" value="1" > 1
								<input type="radio" name="Apparence" value="2" > 2
								<input type="radio" name="Apparence" value="3" > 3
								<input type="radio" name="Apparence" value="4" > 4
								<input type="radio" name="Apparence" value="5" > 5
								<br>
								<input id="idbiere" name="idbiere" type="hidden" value='<?php echo $biere[0]; ?>'>
								<br>
								<div class ="col-sm-12" id="valider la note" >	
									<button type="submit" class="btn btn-info" onclick = "onClickHide(<?php echo $biere[0];?>)">Envoyer mon avis</button>
								</div>	
							</div>
						</div>
					</form>
						</div>
						</div>
					<?php
					$i=$i+1;
						}
					?>
					</div>	
					</div>	
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
						if (x.style.display === "inline-block") {
							x.style.display = "none";
						} else {
							x.style.display = "inline-block";
						}
					}
					function onClickHide2(num_biere) {
						var x = document.getElementById("facultatif"+num_biere);
						if (x.style.display === "none") {
							x.style.display = "inline-block";
						} else {
							x.style.display = "none";
						}
					}
				</script>
		</body>
		<?php include 'footer.php' ?>
</html>
