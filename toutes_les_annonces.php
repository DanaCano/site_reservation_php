<?php require_once 'inc/header.inc.php'; //inclusion du fichier 'header.inc.php' ?>
<?php


//AFFICHAGE DES TOUTES LES ANNONCES DANS L'ORDRE (LA PLUS RECENTE EN PREMIER) :
$r = execute_requete(" SELECT * FROM advert ORDER BY id DESC;");
$content .= "<div class='row'>";

$content .= "<div class='col-3'>";

    while( $advert = $r->fetch( PDO::FETCH_ASSOC)){
      
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

<h1>Toutes les annonces</h1><br>

<?php echo $content; ?>

<?php require_once 'inc/footer.inc.php'; //inclusion du fichier 'header.inc.php' ?>
