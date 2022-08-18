<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'emplyé</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/flèche.png"> Retour</a>
        <h2>Ajouter un employé</h2>
        <p class="erreur_message">
            Veuillez remplir tous les champs !
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom">
        </form>
        <form action="" method="POST">
            <label>Prénom</label>
            <input type="text" name="prénom">
        </form>
        <form action="" method="POST">
            <label>Age</label>
            <input type="number" name="age">
        </form>
        <form action="" method="POST">
            <label>Sexe</label>
            <input type="text" name="Sexe">
            <input type="submit" value="Modifier" name="button">

        </form>
    </div>
</body>
</html>