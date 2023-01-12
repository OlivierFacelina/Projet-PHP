 <?php
            $servname = "localhost"; $dbname = "pdodb"; $user = "root"; $pass = "root";
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                //On prépare la requête et on l'exécute
                $sth = $dbco->prepare("
                  UPDATE Users
                  SET mail='v.durand@edhec.com'
                  WHERE id=2
                ");
                $sth->execute();
                
                //On affiche le nombre d'entrées mise à jour
                $count = $sth->rowCount();
                print('Mise à jour de ' .$count. ' entrée(s)');
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
?>