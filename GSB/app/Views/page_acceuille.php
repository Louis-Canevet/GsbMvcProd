<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Accueil</title>
		<link href="<?php echo base_url('/public/css/GSBcss.css'); ?>" rel="stylesheet" type="text/css" />

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

	</head>

														<!-- mise en place d'un dégrader en back-ground dans la balise "<body>"-->
	<body style="padding-top: 2rem; background: linear-gradient(to right, #808080, #804647); background: -webkit-linear-gradient(to right, #808080, #804647);">
			
	<!--Mise en place de l'entete, permet d'afficher un texte centrer en gras et en italic-->
		<header class="header">
			<strong><p class="text-center bold border-line fst-italic" style="border-line:'red';">Galaxy Swiss Bourdin</p></strong>
		</header>
			<br/>
			<br/>
					<!-- Insertion d'une image -->
			<center><img src="image/logo_GSB2.png" alt="logo"/></center>

		<!-- Création d'un cadre de couleur noir (bg-dark) et dont le texte est de couleur claire -->
			<div class="card bg-dark text-light" style="border-radius: 2cm;">
				<!-- centre les éléments -->
				<div class="card-body p-8 text-center">
					<main role="main" class="container">
						<div style="padding: 1.5rem;">
							<p>Bienvenue sur notre site web !</p>
							<p>Aujourd'hui nous sommes le <?php echo date('d/m/Y'); ?>.</p>
						</div>
					</main>
				</div>
			</div>
		<br/>
		<br/>
		<center><a href="<?php echo base_url().'/public/index.php?action=connecter';?>" class="btn btn-outline-danger btn-md px-5 text-light">Envoie</a></center>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
        <button onclick="location.href='<?php echo base_url().'/public/index.php?action=rgpd';?>'" class="btn btn-outline-dark btn-md px-4">Condition général d'utilisation</button>
	</body>
</html>