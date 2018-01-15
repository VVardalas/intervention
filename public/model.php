<?php

function getInterventions() {
    // Accès aux données
    $bdd = new PDO('mysql:host=localhost;dbname=intervention;charset=utf8', 'root', '');
    $interventions = $bdd->query('select * from intervention'
      . ' order by num desc');

    return $interventions;
}

function getCategoriesInterventions(){
    // Accès aux données
    $bdd = new PDO('mysql:host=localhost;dbname=intervention;charset=utf8', 'root', '');
    $categories_interventions = $bdd->query('select * from categories_interventions'
      . ' order by id desc');

    return $categories_interventions;
}

/*function postDemandeIntervention(){
    // Accès aux données
    $bdd = new PDO('mysql:host=localhost;dbname=intervention;charset=utf8', 'root', '');
    $new_demande = array(
        "nom" => $_POST['nom'],
        "bureau"  => $_POST['bureau'],
        "probleme"     => $_POST['probleme'],
        "description"       => $_POST['age'],
        "date"  => date('Y-m-d')
    );

    $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "intervention",
            implode(", ", array_keys($new_demande)),
            ":" . implode(", :", array_keys($new_demande))
    );

    $statement = $connection->prepare($sql);
    $statement->execute($new_demande);

}*/