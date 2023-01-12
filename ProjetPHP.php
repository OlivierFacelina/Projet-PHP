<?php

    if (isset($_POST["submit"])) {
        require('connexion.php');
        include('traitement.php');
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Formulaire d'inscription FXL - F1 2021</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="stylesheet" href="ProjetPHP.css">
</head>

<body>

<?php
        $servername = 'localhost';
        $username = 'root';
        $password = 'root';

        //On établit la connexion
        $conn = new mysqli($servername, $username, $password);

        //On vérifie la connexion
        if($conn->connect_error){
            die('Erreur : ' .$conn->connect_error);
        }
        echo 'Connexion réussie';
        //iNSERT INTO
        $sql = "INSERT INTO joueurs (Nom, Age, Prenom) VALUES ('FACELINA', '18', 'Olivier')";
        $conn = mysqli_query($conn, $re)
    ?>

    <form class="form" method="get">
        <p class="titre"><u>F1 Xbox League</u></p>
        <div class="form-group">
            <label for="pseudo">Pseudo IG</label>
            <input type="text" id="name" class="form-control form-control-lg" placeholder="Ton pseudo Xbox">
        </div>
        <div class="form-group">
            <label for="pseudo">Pseudo Discord</label>
            <input type="text" id="email" class="form-control" placeholder="Ton pseudo discord">
        </div>
        <div class="form-group">
            <label for="ecurie">Ecurie souhaitée</label>
        <textarea class="form-control" id="comment" placeholder="L'écurie que tu souhaites..."></textarea>
        </div>
        <div class="form-group horaire">
            <label>Votre tranche horaire:</label><br>
            <input type="radio" name="horaire" value="15h">Dimanche 15h00<br>
            <input type="radio" name="horaire" value="17h30">Dimanche 17h30
        </div>
        <br><br>

        <select name="niveau">
            <option>--Niveau IA--</option>
            <option>0-40</option> 
            <option>41-70</option>
            <option>71-90</option>
            <option>91-100</option>
            <option>101-110</option>
        </select><br><br>
        
        <button type="submit" class="btn btn-default" id="submit">Envoyer</button>
    </form>

</body>

</html>