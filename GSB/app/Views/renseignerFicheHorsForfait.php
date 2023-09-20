<!DOCTYPE html>

	 <head>
        <title>gsbV2 - Renseigner fiche frais</title>
        <meta charset="utf-8"/>
        <link href="<?php echo base_url('/public/css/GSBcss.css'); ?>" rel="stylesheet" type="text/css" />

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    </head>
		<!-- mise en place d'un dégrader en back-ground dans la balise "<body>"-->
	<body style="background: linear-gradient(to right, #808080, #804647); background: -webkit-linear-gradient(to right, #808080, #804647);">
	

	<div class="col-6 col-md-6 col-lg-6" style="border:3px solid; text-align:center;margin-left:auto;margin-right:auto; width:50%;border-radius:25%;">

    <?php 
    
		session_start();
		
    $nom = $_SESSION['nom'];
    $prenom = $_SESSION['prenom'];
    $id = $_SESSION['idVisiteur'];
    echo ('<h1>');
    echo ($nom);
    echo (' ');
    echo ($prenom);
    echo ('<br>');
    echo ($id);
    echo ('</h1>');
    ?>
    <a href="<?php echo base_url().'/public/index.php?action=deconnexion';?>" class="btn btn-outline-danger btn-md px-5 text-light">Déconnexion</a>
    </div>

		<!-- mise en place d'un dégrader en back-ground -->
		<section class="vh-100 gradient-custom">
			<!-- réduit la largeur du carde "noir"-->
			<div class="container py-5 h-100">
				<!-- permet de centrer tout les objets -->
				<div class="row d-flex justify-content-center align-items-center h-100">
					<!-- rétrécie le cadre et affine la bordur latérale-->
					<div class="col-12 col-md-8 col-lg-6 col-xl-5">
						<!-- applique un css dans l'encadrer "noir"-->
						<div class="card bg-light text-light" style="border-radius: 5cm;">
							<!-- Créer la bordure rouge  et modifie la couleur interne de la carte-->
							<div class="bg-dark border border-red" style="border-radius: 5cm; border-style: solid;">
								<!-- centre les éléments -->
								<div class="card-body p-8 text-center">
									<!-- ajoute une marge sur le cadre -->
									<div class="mb-md-5 mt-md-4 pb-5">
										<!-- Fiat apparaitre l'image -->
										</br>																
										<h2 class="fw-bold mb-2 text-uppercase"><img src="image/logo_GSB2.png" alt="Logo" style="width:250px;height:250px;"/></h2>
										</br>
										</br>
										</br>
										<!-- Paramettre à lié -->
										<h5>Renseignez votre Fiche frais :</h5>
											<center>
												<?php echo '<form action="'.base_url().'/public/index.php?action=envoieHF" method="post" class="form-connexion">'?>
											</center>	
											<center>
												<form action="" method="post">
													<div class="formulaires">
														<table>
															<p><strong><u>Frait hors forfaitaire :</u></strong></p>
																<label for="repasRepresentation">
																	Nom du forfait : <input type="text" id="name" name="libelle" minlength="1">
																</label>
																</br>
																</br>
																<label for="fleuriste">
																	Date : <input type="date" id="name" name="date" minlength="1">
																</label>
																</br>			
																</br>
																<label for="fleuriste">
																	Montant : <input type="text" id="name" name="montant" minlength="1">
																</label>															
																</br>																
																</br>																													
															<button class="btn btn-outline-danger btn-lg px-5" type="submit" name="connexion" value="connexion">Valider</button> 
														</table>
													</div>
												</form>	
											</center>				
                        			</div>
                      			</div>
                    		</div>
                  		</div>
                	</div>
            	</div>
            </div>
        </section>	
		<br/>
		<br/>
		<br/>
        <button onclick="location.href='<?php echo base_url().'/public/index.php?action=rgpd';?>'" class="btn btn-outline-dark btn-md px-4">Condition général d'utilisation</button>
    </body>
</html>