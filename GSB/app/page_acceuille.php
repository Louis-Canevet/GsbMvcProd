<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Acceuil</title>
    <link href="<?php echo base_url('/public/css/GSBcss.css'); ?>" rel="stylesheet" type="text/css" />
  </head>


  <body>
    <header class="page-header">
            <div class='logo'>
              <a href="page_acceuille.php" class="img"><img src="image/logo_GSB.png" alt="logo"/></a>
            </div>
			
			<strong><u><p>Galaxy Swiss Bourdin<p></u></strong>
       
				<?php
				echo'<a href="'.base_url().'/public/index.php?action=connecter">Se connecter</a>'
				?>
				
				

				
				
			</br>
		</header>
		
		</br></br></br></br></br></br></br></br></br>
		
		<center>
			<div class="image_acceuille">
				<a href="connexion.php">
				<img src="image/bonhomme.png" sizes="220" height="220"/></a>
			</div>
			<p>Bienvenue sur notre site web !</p>
			<p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
		</center>
		
	
		
	
	
	<footer class="page-footer">
	<a href="rgpd.php" name="rgpd">
	<p> Conditions Générales d'Utilisation </p>
	</footer>

   

    
</form>
   
  </body>
</html>