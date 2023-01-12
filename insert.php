<?php
$servername = "mysql.hostinger.fr";
$database = "u000000001_nom";
$username = "u000000001_user";
$password = "MotDePasse";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Échec de la connexion : " . mysqli_connect_error());
}
 
echo "Connexion réussie";
 
$sql = "INSERT INTO Etudiants (prenom, nom, email) VALUES ('Test', 'Testing', 'Testing@tesing.com')";
if (mysqli_query($conn, $sql)) {
      echo "Nouveau enregistrement créé avec succès";
} else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

$sql = "INSERT INTO Etudiants (prenom, nom, email) VALUES ('Test', 'Testing', 'Testing@tesing.com')";

if (mysqli_query($conn, $sql)) 
{
    echo "Nouveau enregistrement créé avec succès";
}
else {
    echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}

//Insère une première entrée
$prenom = "Pierre"; $nom = "Giraud"; $mail = "pierre.giraud@edhec.com";
$sth->execute();

//Insère une deuxième entrée
$prenom = "Victor"; $nom = "Durand"; $mail = "v.durandd@edhec.com";
$sth->execute();

//Insère une troisième entrée
$prenom = "Julia"; $nom = "Joly"; $mail = "july@gmail.com";
$sth->execute();

?>

------------------

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