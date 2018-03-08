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
		<link href="index.css?v=<?php echo time();?>" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
	<?php include'Get_biere.php';?>
		<div class="right">
			<div class="Intro">
				<?php 
				if(!function_exists("get_xp")){
				include'update_Xp.php';
				}
				$xp=get_xp($_COOKIE['id']);
				$lvl=floor($xp[0]/100);
				?>
				<h3>Vous êtes niveau <?php echo $lvl; ?> et à <?php echo $xp[0]-100*$lvl; ?> % du niveau actuel
				</h3>
			</div>
			<div class="Biere">
			<div class="Biere">
			<form action='Traitement.php' method="post">
				<?php 
				$biere=get_biere('Anonymous');?>
					<h4>Vous notez  la : <?php echo $biere[1];?></h4>
					<h2>Partie Obligatoire</h2>
					<a> Note</a>
						<input type="radio" name="Note" value="0" > Imbuvable
						<input type="radio" name="Note" value="1" > Limite
						<input type="radio" name="Note" value="2" > Passable / Buvable
						<input type="radio" name="Note" value="3" > Assez bonne
						<input type="radio" name="Note" value="4" > Bonne
						<input type="radio" name="Note" value="5" > Très bonne
						<input type="radio" name="Note" value="6" > Excellente
						<br>
					<h2>Partie Facultative</h2>
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
						<input id="mail" name="mail" type="hidden" value="<?php echo $_COOKIE['id']?>">
						<input id="idbiere" name="idbiere" type="hidden" value="<?php echo $biere[0]?>">
						<br>
				<input type="submit" value="voter" />
			</form>
			<form action='Traitement.php' method="post">
				<input id="mail" name="mail" type="hidden" value="<?php echo $_COOKIE['id']?>">
				<br>
				<input type="submit" value="Je ne connais pas cette bière" />
			</form>
			</div>
		</div>
	</body>
</html>
