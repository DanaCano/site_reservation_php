<?php require_once 'inc/header.inc.php'; //inclusion du fichier 'header.inc.php' ?>

<?php

$monid = $_GET['id'];

if( $_POST ){ //ICI Si on a valide le formulaire 

//print '<pre>';                 
//print_r( $joueur );
//print '</pre>';

    $lemessage = $_POST['reservation_message']; 
    execute_requete("UPDATE advert SET reservation_message = '$lemessage' WHERE id = $monid");

}

//Fiche d'un annonce selectioné'

$r = execute_requete("SELECT * FROM advert WHERE id = $monid");
$content .= "<div class='row'>";

  //Affichage
$content .= "<div class='col-3'>";

$advert = $r->fetch( PDO::FETCH_ASSOC);
//debug( $advert );

$titre_annonce = strtoupper($advert['title']);
$content .= "$titre_annonce<br> $advert[description] <br>  $advert[postal_code] <br>  $advert[city] <br> $advert[type] <br> $advert[price]";
$content .= "</div>";
$content .= "</div>";


?>

<?php if( empty( $advert['reservation_message']) ) { //SI le message est vide, on affiche le formulaire ?>

<h1>Reserver l'annonce</h1><br>
<?php echo $content; ?>

<br>
<form method="post">

    <label for="desc">Message pour réserver</label><br>
        <textarea name="reservation_message" id="reservation_message" cols="30" rows="10"></textarea><br><br>

    <input type="submit" class="btn btn-secondary" value="Je réserve">
</form>

<?php }else { //SINON on affiche DEJA RESERVE !!
    
    echo "<span style='color: red;' >DEJA RESERVE !! </span>";  

}
?>


<?php require_once 'inc/footer.inc.php'; //inclusion du fichier 'header.inc.php' ?>