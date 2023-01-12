<?php

    $saisieCoach = "Insert into coach(nom_coach,prenom_coach,age_coach) values('".$_POST["nom"]."','".$_POST["prenom"]."','".$_POST["age"]."')";
    $envoieSaisieCoach = mysqli_query($conn, $saisieCoach);

    $saisieCoach = "Insert into coach(nom_coach,prenom_coach,age_coach) values('".$_POST["nom"]."','".$_POST["prenom"]."','".$_POST["age"]."')";
    $envoieSaisieCoach = mysqli_query($conn, $saisieCoach);

    //$requeteTableCoach = "SELECT * From coach";

    //$requete = mysqli_query($conn, $sql);

?>