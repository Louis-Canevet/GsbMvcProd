<?php
//acces au controller parent pour l heritage
namespace App\Controllers;
use CodeIgniter\Controller;

//=========================================================================================
//définition d'une classe Controleur (meme nom que votre fichier Controleur.php) 
//héritée de Controller et permettant d'utiliser les raccoucis et fonctions de CodeIgniter
//  Attention vos Fichiers et Classes Controleur et Modele doit commencer par une Majuscule 
//  et suivre par des minuscules
//=========================================================================================

class Controleur extends Controller {

//=====================================================================
//Fonction index correspondant au Controleur frontal (ou index.php) en MVC libre
//=====================================================================
public function index(){
	if (isset($_GET["action"])){
		if ($_GET["action"]=="connecter"){
			$this->connexion();}
		
		if ($_GET["action"]=="login"){
			$this->login();}

		if($_GET["action"]=="envoie"){
			$this->envoie();
			}
		if($_GET["action"]=="envoieHF"){
			$this->envoieHF();
			}
			

		if($_GET["action"]=="rgpd"){
			$this->rgpd();
			}
		if($_GET["action"]=="renseignerFicheFrais"){
			$this->renseignerFicheFrais();
		}
		if($_GET["action"]=="consulterFicheFrais"){
			$this->consulterFicheFrais();
		}

		if($_GET["action"]=="HorsForfait"){
			$this->HorsForfait();
			}

		if($_GET["action"] == "voirFiche"){
			session_start();
			$this->voirFicheFrais($_POST["mois"]);
		}
		if($_GET["action"] == "deconnexion"){
			$this->accueil();
		}
		if($_GET["action"] == "accueil"){
			$this->accueil();
		}
			
		

		}
		else{
		$this->accueil();
	}
}


//======================================================
// Code du controleur simple (ex fichier Controleur.php)
//======================================================

// Action 1 : Affiche la liste de tous les billets du blog
public function accueil() {
		echo view('page_acceuille');
}

public function connexion() {
		echo view('vue_connexion');
}

public function rgpd() {
	echo view('rgpd');
}

public function consulterFicheFrais(){
	echo view('ConsulterFicheFrais');
}

public function renseignerFicheFrais(){
	echo view('renseignerFicheFrais');
}

public function HorsForfait() {
	echo view('renseignerFicheHorsForfait');
}

public function login() {
	$Modele = new \App\Models\Modele();
	if ((isset($_POST["user"]))&&((isset($_POST["password"])))){

		$donnees = $Modele->Connexion($_POST["user"], $_POST["password"]);
		

		if (isset($donnees[0]->mdp)){

			$donnees2 = $Modele->Verification($donnees[0]->id, date("F"));


			if($donnees2[0]->nb==0){
				$donnees3 = $Modele->CreerFicheFrais($donnees[0]->id, date("F"));
			

			}

			session_start();
			$_SESSION['idVisiteur'] = $donnees[0]->id;
			$_SESSION['nom'] = $donnees[0]->nom;
			$_SESSION['prenom'] = $donnees[0]->prenom;
			$this->voirFicheFrais(date("F"));
			
		}
		else{
			echo view('page_acceuille');
		}
	}
	
}

public function envoie(){

	$Modele = new \App\Models\Modele();
	session_start();
	if((isset($_POST["etape"])) && (isset($_POST["km"])) && (isset($_POST["nuit"])) && (isset($_POST["repasResto"]))){

		$donnees4 = $Modele->envoieFicheFrais($_POST["etape"],$_POST["km"],$_POST["nuit"],$_POST["repasResto"],$_SESSION['idVisiteur'],date("F"));
		$this->voirFicheFrais(date("F"));
	}
}

public function envoieHF(){

	$Modele = new \App\Models\Modele();
	session_start();

	if((isset($_POST["libelle"])) && (isset($_POST["date"])) && (isset($_POST["montant"]))){
		$donnees5 = $Modele->envoieHF($_SESSION["idVisiteur"],date("F"),$_POST["libelle"],$_POST["date"],$_POST["montant"]);
		$this->voirFicheFrais(date("F"));
	}
}

public function voirFicheFrais($mois){
	$Modele = new \App\Models\Modele();
	
	$donnees6 = $Modele->afficherFicheFrais($mois);
	$donnees7 = $Modele->afficherFicheHorsFrais($mois);
	
	$_SESSION['ficheFrais'] = $donnees6;
	$_SESSION['ficheHorsFrais'] = $donnees7;
	
	echo view("ConsulterFicheFrais");



}

// Affiche une erreur
public function erreur($msgErreur) {
  echo view('vueErreur.php', $msgErreur);
}

//==========================
//Fin du code du controleur simple
//===========================

//fin de la classe
}



?>