<?php include '../config.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>BeHere</title>
		<link rel="stylesheet" type="text/css" media="screen" href="../style/connexion.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../style/inscription.css" />
		
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
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
	<?php include 'header.php' ?>

	<?php include $modele.'Get_biere.php';?>
		<div class="container fluid">
			<div class="row">
				
			<div class="bloc_info">	
				<h1>Bienvenue sur notre page de notation de Céréales Liquides !</h1>
				<p class="informations">Vous êtes actuellement niveau <?php echo $lvl; ?>, et à <?php echo $xp[0]-100*$lvl; ?> % du niveau actuel.</p>


			</div>
		</div>
			<div class="row">
				<div class="col-sm-3">
					<?php 
						$bieres=get_x_biere(10);
						$i=0;
						foreach($bieres as $biere){
					?>
					<div class="biere" id="biere<?php echo $biere[0]; ?>">
						<div class="nom_biere"  onclick = "onClickHide(<?php echo $biere[0];?>)">
							<img src=<?php echo $biere[2];?> ></img><br>
							<b> <?php echo $biere[1] ?> </b>
						</div>
						<div class = "notation" id="notation<?php echo $biere[0]; ?>" style="display:none">
							<form class="annexe" action=<?php echo $controleur.'Traitement.php' ?> method="post" >
								<div class = "general">
									<div class = "radio_gen">
										<a> Votre appréciation générale de la bière : </a>
										<br>
										<label class="container"> Imbuvable
											<input type="radio" name="n	ote" value="0" >
											<span class="checkmark"></span>
										</label>
										<label class="container"> Limite
											<input type="radio" name="note" value="1" >
											<span class="checkmark"></span>
										</label>
										<label class="container"> Passable
											<input type="radio" name="note" value="2" >
											<span class="checkmark"></span>
										</label>
										<label class="container"> Assez bonne
											<input type="radio" name="note" value="3" >
											<span class="checkmark"></span>
										</label>
										<label class="container"> Bonne
											<input type="radio" name="note" value="4" >
											<span class="checkmark"></span>
										</label>
										<label class="container"> Très bonne
											<input type="radio" name="note" value="5" >
											<span class="checkmark"></span>
										</label>
										<label class="container"> Excellente
											<input type="radio" name="note" value="6" >
											<span class="checkmark"></span>
										</label>
									</div>
								</div>

								<div class="precis" id="facultatif<?php echo $biere[0]; ?>" style="display:none">
									<div class = "radio_prec">
										<a>Arôme</a>
										<label class="container"> Non Noté
											<input type="radio" name="Arome" value="-1" checked>
											<span class="checkmark"></span>
										</label><br>
										<label class="container"> 0
											<input type="radio" name="Arome" value="0" >
											<span class="checkmark"></span>
										</label><br>	
										<label class="container"> 1
											<input type="radio" name="Arome" value="1" >
											<span class="checkmark"></span>
										</label><br>	
										<label class="container"> 2
											<input type="radio" name="Arome" value="2" >
											<span class="checkmark"></span>
										</label><br>	
										<label class="container"> 3
											<input type="radio" name="Arome" value="3" >
											<span class="checkmark"></span>
										</label><br>	
										<label class="container"> 4
											<input type="radio" name="Arome" value="4" >
											<span class="checkmark"></span>
										</label><br>	
										<label class="container"> 5
											<input type="radio" name="Arome" value="5" >
											<span class="checkmark"></span>
										</label><br>
										<br>
									</div>
									<div class = "radio_prec">
										<a>Goût</a>
										<label class="container"> Non Noté
											<input type="radio" name="Gout" value="-1" checked>
											<span class="checkmark"></span>
										</label><br>
										<br>
										<label class="container"> 0
											<input type="radio" name="Gout" value="0" >
											<span class="checkmark"></span>
										</label><br>	
										<label class="container"> 1
											<input type="radio" name="Gout" value="1" >
											<span class="checkmark"></span>
										</label><br>	
										<label class="container"> 2
											<input type="radio" name="Gout" value="2" >
											<span class="checkmark"></span>
										</label><br>	
										<label class="container"> 3
											<input type="radio" name="Gout" value="3" >
											<span class="checkmark"></span>
										</label><br>	
										<label class="container"> 4
											<input type="radio" name="Gout" value="4" >
											<span class="checkmark"></span>
										</label><br>	
										<label class="container"> 5
											<input type="radio" name="Gout" value="5" >
											<span class="checkmark"></span>
										</label><br>
										<br>
									</div>
									<div class = "radio_prec">
										<a>Apparence</a>
										<label class="container"> Non Noté
											<input type="radio" name="Apparence" value="-1" checked>
											<span class="checkmark"></span>
										</label><br>
										<br>
										<label class="container"> 0
											<input type="radio" name="Apparence" value="0" >
											<span class="checkmark"></span>
										</label><br>	
										<label class="container"> 1
											<input type="radio" name="Apparence" value="1" >
											<span class="checkmark"></span>
										</label><br>	
										<label class="container"> 2
											<input type="radio" name="Apparence" value="2" >
											<span class="checkmark"></span>
										</label><br>	
										<label class="container"> 3
											<input type="radio" name="Apparence" value="3" >
											<span class="checkmark"></span>
										</label><br>	
										<label class="container"> 4
											<input type="radio" name="Apparence" value="4" >
											<span class="checkmark"></span>
										</label><br>	
										<label class="container"> 5
											<input type="radio" name="Apparence" value="5" >
											<span class="checkmark"></span>
										</label><br>
										<br>
										<input id="idbiere" name="idbiere" type="hidden" value='<?php echo $biere[0]; ?>'>
										<br>
									</div>
									<div class ="col-sm-12" id="valider la note" >	
										<button type="submit" class="btn" onclick = "onClickHide(<?php echo $biere[0];?>)">Envoyer mon avis</button>
									</div>
								</div>
							</form>
							<button id="developpe" class="btn" onclick= "onClickHide2(<?php echo $biere[0];?>)">Je suis chaud bouillant ! </button>
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
			var y = document.getElementById("biere"+num_biere);
			if (y.className === "overlay") {
				x.style.display = "none";
				overlayoff();
				y.className = "biere";
			} else if (y.className === "biere") {
				// x.style.display = "inline-block";
				// overlayoff();
				y.className = "overlay";
				overlayon();
				x.style.display = "inline-block";
			}
		}
		function onClickHide2(num_biere) {
			var x = document.getElementById("facultatif"+num_biere);
			var btn = document.getElementById("developpe");
			x.style.display = "inline-block";
			btn.style.visibility = "hidden";
		}
		function overlayon(){
			var over = document.getElementsByClassName("overlay");
			over[0].style.display = "block";
		}
		function overlayoff() {
			var over = document.getElementsByClassName("overlay");
			over[0].style.display = "inline-flex";
			over[0].className = "biere";
		}
	</script>

</body>
		<?php include 'footer.php' ?>
</html>
