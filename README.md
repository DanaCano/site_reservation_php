# site_reservation_php

Site web de réservation en PHP avec un minimum de bootstrap, html et css. 

J'ai utilisé PhpMyAdmin en localhost et pour des raisons de sécurité je n'ai pas partagé ici mon fichier "init.inc.php" qu'il contient évidemment les connexions pour pour interagir avec la base de données, PDO, mot de passe, etc.

Contenu du site_reservation_php :

--BASE DE DONEE DE DANA


CREATE TABLE `advert` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `postal_code` varchar(15) NOT NULL,
  `city` varchar(60) NOT NULL,
  `type` enum('location','vente') NOT NULL,
  `price` int(3) NOT NULL,
  `reservation_message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-----------------------------------------------------
Pas à pas :)

Créez une base de données selon les indications suivantes :
DATABASE : DE DANA : advert
-----
id
         title
         description
         postal_code
         city
         type
         price
         reservation_message
         
         
 Exportez votre base de données dans un fichier database.sql
 
 AJOUTER DES ANNONCES
 
Création de la page « Ajouter une annonce » :

Création d'une page de formulaire accessible depuis la barre de navigation permettant l’ajout d’une annonce immobilière en base de données contenant les champs suivants :
Titre de l’annonce
Descriptiondel’annonce
Code postal et ville du bien immobilier
Type d’annonce(location ou vente par exemple)
Prix

AFFICHAGE DES ANNONCES EN PAGE D’ACCUEIL

Création une page d’accueil contenant :

La liste des annonces présentes sur le site
Les annonces doivent apparaître dans l’ordre antéchronologique (la plus récente en premier)
Seules les dernières annonces ajoutées doivent apparaître
Le titre des annonces doit être affiché en MAJUSCULES
Une barre de navigation avec les liens suivants : Ajouter une annonce
Consulter toutes les annonces


AFFICHAGE ET RESERVATION D'UNE ANNONCE

Création d'une page « Consulter toutes les annonces » :

Les annonces doivent apparaître dans cette page
Un lien dirigeant vers la page « Consulter une annonce » doit être présent sur chaque annonce
Si une annonce est réservée (voir la page « Consulter une annonce ») cela doit être
indiqué visuellement (par exemple : un label indiquant « réservé », griser l’annonce...)

Créer d'une page « Consulter une annonce » :

Affichage de tous les détails d’une annonce
Si un message de réservation a été saisi, s'afficher dans cette page
Un formulaire contenant un champ textarea doit est présent avec un bouton de validation « Je réserve ». 
Il permettra aux usagers de saisir un message afin d’être recontactés. Une fois ce formulaire envoyé, l’annonce est considérée comme
« réservée » dans la page « Consulter toutes les annonces ». Ce message sera enregistré dans le champ reservation_message de l’annonce.
         
