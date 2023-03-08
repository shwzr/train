<!DOCTYPE html>
<html>
	<head>
		<title>Portfolio</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css">
		<!-- BoxIcons css -->
		<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
	</head>


	<body>
		<!----------------Navbar---------------->
		<div class="nav" id="up">
			<ul nav-link>
				<?php 
					$data = yaml_parse_file("yaml/nav.yaml");
					foreach ($data as $ancre => $onglet) {
						echo '<li><a href="portfolio.php#'.$ancre.'">'.$onglet.'</a></li>';
					}
				?>
		  	</ul>
		</div>
		<div>
			<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
			viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
				<defs>
					<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
				</defs>
				<g class="parallax">
					<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
					<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
					<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
					<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff7f7" />
				</g>
			</svg>
		</div>
		<!-------------------------------------->

	</div>

		<!----------------Accueil---------------->
		<div class="paper" id="accueil">
				<?php 
					$data = yaml_parse_file("yaml/accueil.yaml");
						echo '<h1>'.$data['name'].'</h1>';
						echo '<p>'.$data['paragraphe'].'</p>';
						echo '<img class="img-illustration" src="img/'.$data['illustration'].'">';
				?>
		</div>
		<!-------------------------------------->


		<!---------------À propos--------------->
		<div class="container" id="a-propos">
			<div class="paper">
				<?php 
					$data = yaml_parse_file("yaml/propos.yaml");
						echo '<h1>'.$data['title'].'</h1>';
						echo '<img class="img-profil" alt="picture" src="img/'.$data['profile'].'">';
						echo '<p>'.$data['paragraphe'].'</p>';
						echo '<img class="img-illustration" src="img/'.$data['illustration'].'">';
				?>
			</div>
		</div>
		<!-------------------------------------->
		


		<!-------------Competences------------->
		<div class="paper" id="competences">
			<h1>Compétences</h1>
			<div class="divbar">
				<div class="bar-dev"><h3>Développement :</h3>
					<p>HTML</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['html'].';"></div>';
					?>
					<p>CSS</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['css'].';"></div>';
					?>
					<p>PHP</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['php'].';"></div>';
					?>
					<p>Yaml</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['yaml'].';"></div>';
					?>
					<p>Python</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['python'].';"></div>';
					?>
				</div>
				<div class="bar-ide"><h3>IDE / Autres :</h3>
					<p>VS Code</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['vscode'].';"></div>';
					?>
					<p>Sublime Text</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['sublimetext'].';"></div>';
					?>
					<p>Git</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['git'].';"></div>';
					?>
					<p>...</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['a'].';"></div>';
					?>
					<p>...</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['b'].';"></div>';
					?>
				</div>
				<div class="bar-reseaux"><h3>Réseaux :</h3></div>
					<p>Conf. d'un Switch</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['conf-switch'].';"></div>';
					?>
					<p>Conf. d'un Router</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['conf-router'].';"></div>';
					?>
					<p>Conf. d'une Caméra</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['conf-camera'].';"></div>';
					?>
					<p>Conf. d'un SRv Windows</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['conf-srv-windows'].';"></div>';
					?>
					<p>Conf. d'un SRV Debian</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['conf-srv-linux'].';"></div>';
					?>
				</div>
			</div>
		</div>
		<!-------------------------------------->


		<!--------------Expérience-------------->
		<div class="container" id="experience">
			<div class="paper">
					<?php 
						$data = yaml_parse_file("yaml/experience.yaml");
							echo '<h1>'.$data['title'].'</h1><div class="align-center-center">';
							echo '<img class="experience-left" src="img/'.$data['illustration'].'"><ul class="experience-right">';
							echo '<li>'.$data['paragraphe1'].'</li>';
							echo '<li>'.$data['paragraphe2'].'</li>';
							echo '<li>'.$data['paragraphe3'].'</li>';
							echo '<li>'.$data['paragraphe4'].'</li>';
							echo '<li>'.$data['paragraphe5'].'</li>';
					?>
					</ul>
				</div>
			</div>
		</div>
		<!-------------------------------------->


		<!---------------Formation--------------->
		<div class="container" id="formation">
			<div class="paper">
				<h1>Formation</h1>
				<div class="align-center-center">
					<ul class="formation-right">
						<li>4 semaines de stage dans le domaine<br> de l’informatique, de l’audiovisuel et du réseau<br>
dans l’entreprise Les Franciscaines à Deauville.</li>
						<li>8 semaines de stage dans le domaine<br> de l’informatique, de l’audiovisuel et du réseau<br>
dans l’entreprise communauté de communes <br>Cœur Côte Fleurie à Deauville</li>
						<li>4 semaines de stage dans le domaine<br> de l’informatique et de l’audiovisuel dans<br>
l’entreprise Côte Fleurie Informatique à Saint Arnoult</li>
						<li>5 semaines de stage dans le domaine<br> de l’informatique et de l’audiovisuel à la<br> mairie de
Trouville-sur-Mer</li>
					</ul>
					<img class="formation-left" src="img/illustration-formation.png">
				</div>
			</div>
		</div>

		<!-------------------------------------->


		<!----------------Contact---------------->
		<div class="container" id="contact">
			<div class="paper">
				<h1>Contact</h1>
				<p>Nous serions ravis de vous entendre !</p>
				<form class="form-contact">      
					<input name="name" type="text" class="feedback-input-contact" placeholder="Nom" />   
					<input name="email" type="text" class="feedback-input-contact" placeholder="Email" />
					<textarea name="text" class="feedback-input-contact textarea-contact" placeholder="Commentaire"></textarea>
					<input type="submit" value="Envoyer"/>
				</form>
			</div>
		</div>
		<!-------------------------------------->


		<!----------------Footer---------------->
		<div class="footer">
			<div class="element-social">
				<a class="twitter" href="https://twitter.com/showzur" target="_blank"><i class='bx bxl-twitter bx-sm' style='color:#ffffff'></i></a>
				<a href="https://github.com/shwzr" target="_blank"><i class='bx bxl-github bx-sm' style='color:#ffffff'></i></a>
				<a href="https://www.youtube.com/embed/1-AltLENQGg?rel=0&autoplay=1&allowfullscreen" target="_blank"><i class='bx bxl-youtube bx-sm' style='color:#ffffff'></i></a>
			</div>
		</div>
		<!-------------------------------------->
	</body>
</html>
