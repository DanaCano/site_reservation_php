<?php require_once 'inc/header.inc.php'; //inclusion du fichier 'header.inc.php' ?>

<?php

    if( $_POST ){ //ICI MA CONDITION Si on a valide le formulaire 

        //print '<pre>';
        //print_r( $_POST );
        //print '</pre>';

        //Ici, mes variables
        $title =  $_POST['title'];
        $description =  $_POST['description'];
        $postal_code =  $_POST['postal_code'];
        $city =  $_POST['city'];
        $type =  $_POST['type'];
        $price =  $_POST['price'];

        //ICI Pour controler les saisies pour les champs de mon formulaire :
        if( empty( $title ) && empty( $description ) && empty( $postal_code ) && empty( $city ) && empty( $type ) && empty( $price ) ) { //Si les champs sont vides

            echo "<p style='color:red;'>Vous devez renseigner les champs !</p>";
        }
        else if( empty( $title) ){ 

            echo "<p style='color:red;'>Vous devez renseigner le titre !</p>";
        }
        else if( empty( $description ) ){ 

            echo "<p style='color:red;'>Vous devez renseigner la description !</p>";
        }
        else if( empty( $postal_code ) ){ 

            echo "<p style='color:red;'>Vous devez renseigner le code postal !</p>";
        }
        else if( empty( $city ) ){ 

            echo "<p style='color:red;'>Vous devez renseigner la ville !</p>";
        }
        else if( empty( $type ) ){ 

            echo "<p style='color:red;'>Vous devez renseigner le type d'annonce !</p>";
        }
        else if( empty( $price ) ){ 

            echo "<p style='color:red;'>Vous devez renseigner le prix !</p>";
        }


        else if( !is_numeric( $price ) ){ //SINON SI prix est non numerique

            echo "<p style='color:red;'>Vous devez renseigner un chiffre !</p>";
        }
        else if( $price <= 0 ) { //SINON inferieur ou plus que zero 

            echo "<p style='color:red;'>Vous devez renseigner un prix supérieur à zéro !</p>";
            
        }
        else { //SINON j'exécute ma requête 
            echo "<p style='color:green;'>Annonce ajoutée !</p>";

            execute_requete("
            INSERT INTO advert (title, description, postal_code, city, type, price )
                VALUES (
                    '$_POST[title]',
                    '$_POST[description]',
                    '$_POST[postal_code]',
                    '$_POST[city]',
                    '$_POST[type]',
                    '$_POST[price]'
                )
            ");
        }


    }



?>

<!----------------MON FORMULAIRE------------------>
<h1>Ajouter un annonce !!!</h1><br>

<form method="post">

    <label>Titre de l'annonce</label><br>
    <input type="text" name="title" value="" ><br>

    <label>Description de l'annonce</label><br>
    <textarea name="description" ></textarea><br>

    <label>Code Postal</label><br>
    <input type="text" name="postal_code" value=""><br>

    <label>Ville</label><br>
    <input type="text" name="city" value=""><br>

    <label>Type d'annonce</label><br>
    <input type="radio" name="type" value="location">location<br>
    <input type="radio" name="type" value="vente">vente<br><br>

    <label>Prix</label><br>
    <input type="text" name="price" value=""><br>

    <input type="submit" class="btn btn-secondary" value="Envoyer">
</form>


<?php require_once 'inc/footer.inc.php'; //inclusion du fichier 'header.inc.php' ?>