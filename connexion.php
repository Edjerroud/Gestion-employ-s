<?php

//connexion à la base de données//

$con = mysqli_connect("localhost","root","","entreprise");
if(!$con){
    echo "vous n'etes pas connecté à la base de données";
}

?>