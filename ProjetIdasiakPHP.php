<!DOCTYPE html>
<html>
  <head>
    <title>Portfolio - FACELINA Olivier</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/568733c487.js" crossorigin="anonymous"></script>
  </head> 

<?php 

$NomError = "";
$PrenomError = "";
if (isset($_POST['submit'])) 
{
    require('connexion.php');

    function verifyInput($var)
    {
        $var = htmlentities($var);
        $var = trim($var);
        $var = strip_tags($var);
        $var = stripslashes($var);
        $var = htmlspecialchars($var);
        return $var;
    }


    $saisieContact = $co->prepare("Insert into joueurs(Nom,Age,Prenom) values('".verifyInput($_POST["Nom"])."','".verifyInput($_POST["Age"])."','".verifyInput($_POST["Prenom"])."')");

    // Vérification des champs du formulaire //
    if (empty($_POST["Nom"]))
    {
        $NomError = "Il faut obligatoirement mettre un Nom !";
    }
    else
    {
        if (empty($_POST["Prenom"]))
        {
            $PrenomError = "Il faut obligatoirement mettre un Prenom !";
        }
        else
            {
                $saisieContact->execute();
            }
    }
}
?>

    <form class="form">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" class="form-control form-control-lg" placeholder="Your name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" class="form-control" placeholder="Your email">
        </div>
        <div class="form-group">
            <label for="comment">Comment</label>
        <textarea class="form-control" id="comment" placeholder="Send a message..."></textarea>
        </div>
        
        <button type="submit" class="btn btn-default" id="submit">Submit</button>
    </form>