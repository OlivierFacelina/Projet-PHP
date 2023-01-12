<?php

	// déclaration et utilisation de variable
	$co = null;

	// Fonction à appeler pour se connecter à la base de données
	function connexionBdd() 
	{
		// Test pour se connecter à la base de données 
		try
		{
			require('config.php'); // utile pour relier le fichier au code 
            // connexion avec PDO
			$var = new PDO("mysql:host=localhost" . $server .";dbname=lyceestvincent" . $dbName, $user, $pass);
			//On définit le mode d'erreur de PDO sur Exception
			$var->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}		
		// Affichage de message d'erreur si la connexion est échouée
		catch(PDOException $e)
		{
			die('Erreur : ' . $e->getMessage());
		}
        return $var;
	}

	$co = connexionBdd();

  ?>