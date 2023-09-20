-- Utilisation de la base de données "gsbV3"
use gsbV3;

-- Supression des utilisateurs
drop user 'admin'@'localhost';
drop user 'visiteur';
drop user 'comptable';

-- Création de l'utilisateur "admin" n'ayant des droits qu'en local sur le serveur
create user 'admin'@'localhost' identified by 'password';

-- Mise en place des droits de l'utilisateur "admin" (uniquement en local sur la machine)
grant all privileges on *.* to 'admin'@'localhost' with grant option;

-- Création de l'utilisateur "visiteur" qui servira pour la connexion de l'application web
-- notez que sur certains environnements (Debian 10, ...) il faudra identifier l'IP source de la connexion
-- la commande deviendra : create user 'visiteur'@'XX.XX.XX.XX' identified by 'password';
-- cette adresse étant généralement celle de votre serveur web sur le réseau

create user 'visiteur' identified by 'password';

-- Mise en place des droits de l'utilisateur "visiteur"
grant insert,update (`date`,`montant`,`libelle`) on `LigneFraisHorsForfait` to visiteur;
grant insert,update (`quantite`,`mois`) on `LigneFraisForfait` to visiteur;
grant select on gvbV3.* to visiteur;

-- Création de l'utilisateur "comptable"
-- notez que sur certains environnements (Debian 10, ...) il faudra identifier l'IP source de la connexion
-- la commande deviendra : create user 'comptable'@'XX.XX.XX.XX' identified by 'password';
-- cette adresse étant généralement celle de votre serveur web sur le réseau

create user 'comptable' identified by 'password';

-- Mise en place des droits de l'utilisateur "comptable"
grant insert,update, delete on `LigneFraisHorsForfait` to comptable;
grant insert,update (`quantite`) on `LigneFraisForfait` to comptable;
grant insert,update (`nbJustificatifs`,`montantValide`,`dateModif`,`idEtat`) on `fichefrais` to comptable;
grant select on gvbV2.* to visiteur;

-- Test pour visualiser les privilèges de chaque utilisateur
show grants for admin;
show grants for visiteur;
show grants for comptable;


