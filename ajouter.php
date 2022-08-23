<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // vérifier que le bouton ajouter a bien été cliqué //
        if(isset($_POST['button'])){

            // extraction des informations envoyé dans des variables par la methode POST //
            extract($_POST);
            // vérifier que tous les champs ont été remplis // 
            if(isset($nom) && isset($prenom) && isset($age) && isset($sexe)){

                // connexion à la basse de donnée //
                include_once "connexion.php";
                // requête d'ajout // 
                $req = mysqli_query($con , "INSERT INTO employe VALUES(NULL, '$nom' , '$prenom' , '$age' , '$sexe')");
                if($req){ // si la requête a été effectuée avec succès , on fait une redirection //
                    header("location: index.php");

                }else{ // si non //
                    $message = "Employé non ajouté";
                }
            }else{

                // si non //
                $message = "veuillez remplir tous les champs !";
            }

        }
    ?>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/flèche.png"> Retour</a>
        <h2>Ajouter un employé</h2>
        <p class="erreur_message">

            <?php 
            // si la variable message existe , affichons son contenu //
            if(isset($message)){
                echo $message;
            }
            ?>

        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom">
            <label>Prénom</label>
            <input type="text" name="prenom">
            <label>Age</label>
            <input type="number" name="age">
            <label>Sexe</label>
            <input type="text" name="sexe">
            <input type="submit" value="Ajouter" name="button">

        </form>
    </div>
</body>
</html>