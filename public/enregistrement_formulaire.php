<?php
if (isset($_POST['submit']))
    {
    
            $host       = "localhost";
            $username   = "root";
            $password   = "";
            $dbname     = "intervention"; // will use later
            $dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
            $options    = array(
                            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                          );
    
            $connection = new PDO($dsn, $username, $password, $options);

            $new_demande = array(
                "nom" => $_POST['nom'],
                "bureau"  => $_POST['bureau'],
                "probleme"     => $_POST['probleme'],
                "description"       => $_POST['description'],
                "date_demande"  => date('Y-m-d'),
                "suivi" => 0
            );

            $sql = sprintf(
                    "INSERT INTO %s (%s) values (%s)",
                    "intervention",
                    implode(", ", array_keys($new_demande)),
                    ":" . implode(", :", array_keys($new_demande))
            );

            $statement = $connection->prepare($sql);
            $statement->execute($new_demande);


    }

?>
<a href="index.php">Retour à l'accueil</a>