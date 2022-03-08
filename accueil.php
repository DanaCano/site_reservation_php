<?php require_once 'inc/header.inc.php'; //inclusion du fichier 'header.inc.php' ?>
<?php

//AFFICHAGE DES 15 DERNIERES ANNONCES:
$r = execute_requete(" SELECT * FROM advert ORDER BY id DESC LIMIT 15;");
$content .= "<div class='row'>";

$content .= "<div class='col-6'>";

    while( $advert = $r->fetch( PDO::FETCH_ASSOC)){
//AFFICHAGE DES TITRES EN MAJUSCULE :     
      $titre_annonce = strtoupper($advert['title']);

        $content .= "<div class='list-group-item'>";
          
        $content .= "$titre_annonce<br> $advert[description] <br>  $advert[postal_code] <br>  $advert[city] <br> $advert[type] <br> $advert[price]";
        
        if (empty ($advert['reservation_message']) ) {
        
          $content .= "<br><a href='consulter_une_annonce.php?id=$advert[id]'>Consulter l'annonce</a>";

        }
        else{

          $content .= '<br><span style="color: red;">Réservé !! </span>';
        }

        $content .= "</div>";
        
      } 
  
$content .= "</div>";
$content .= "</div>";


//----------------------------------------------

?>

<h1>Les 15 dernières annonces, les plus récentes</h1><br>

<?php echo $content; ?>

<?php require_once 'inc/footer.inc.php'; //inclusion du fichier 'header.inc.php' ?>
