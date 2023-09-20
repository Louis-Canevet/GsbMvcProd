<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Connexion</title>
        <link href=".../public/css/GSBBootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
					<!-- mise en place d'un dégrader en back-ground dans la balise "<body>"-->
    <body style="background: linear-gradient(to right, #808080, #804647); background: -webkit-linear-gradient(to right, #808080, #804647);">
      <!-- mise en place d'un dégrader en back-ground -->
      <section class="vh-100 gradient-custom">
          <!-- réduit la largeur du carde "noir"-->
          <div class="container py-5 h-100">
            <!-- permet de centrer tout les objets -->
            <div class="row d-flex justify-content-center align-items-center h-100">
              <!-- Elargie le cadre noir et grossie la bordur latérale -->
              <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <!-- applique un css dans l'encadrer "noir"-->
                <div class="card bg-light text-light" style="border-radius: 5cm;">
                  <!-- Créer la bordure rouge  et modifie la couleur interne de la carte-->
                  <div class="bg-dark border border-red" style="border-radius: 5cm; border-style: solid;">
                    <!-- centre les éléments -->
                    <div class="card-body p-8 text-center">
                      <!-- ajoute une marge sur le cadre -->
                      <div class="mb-md-5 mt-md-4 pb-5">
                        </br>
                        </br>
                        </br>
                        <!-- Fiat apparaitre l'image -->
                        <h2 class="fw-bold mb-2 text-uppercase"><img src="image/logo_GSB2.png" alt="Logo" style="width:250px;height:250px;"/></h2>
                        </br>
                          <p class="text-dark-50 mb-4">Veuillez entrer votre identifiant et mot de passe</p>
                          </br>
                          <!-- Paramettre identifiant à lié -->

                          <div class="connexion">
                            <div class="form-outline form-dark mb-4">
                              <?php
                                echo '<form action="'.base_url().'/public/index.php?action=login" method="post" class="form-connexion">'
                              ?>
                                <strong><label class="form-label" for="text">Identifiant : </label></strong>
                                  <input type="text" name="user" placeholder="Identifiant" id="nom" required>
                                  </br>
                            </div>
                              
                            <div class="form-outline form-white mb-4">
                              <strong><label for="pass">Mot de passe :</label></strong>
                                <input type="password" placeholder="mot de passe" name="password" required>
                                  <br/>
                                  <br/>
                            </div>         

                            <button class="btn btn-outline-danger btn-lg px-5" type="submit" name="connexion" value="connexion">Connexion</button>                  

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <button onclick="location.href='<?php echo base_url().'/public/index.php?action=rgpd';?>'" class="btn btn-outline-dark btn-md px-4">Condition général d'utilisation</button>  
    </body>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</html>