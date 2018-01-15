<?php
//Model
require 'model.php';

$interventions = getInterventions();

?>
<?php include "templates/header.php"; ?>

    <h1 class="h1">Suivi des demandes d'interventions informatiques</h1>
    <div id="contenu" class="contenu">
        <table class="table"> 
            <tr>
                <th>Num</th>
                <th>Salle</th>
                <th>Description</th>
                <th>Remarques</th>
                <th>Demandée le</th>
                <th>Suivi</th>
            </tr>
            <?php foreach ($interventions as $intervention): ?>
                <td><?php echo $intervention["num"] ?></td>
                <td><?php echo $intervention["salle"] ?></td>
                <td><?php echo $intervention["description"] ?></td>
                <td><?php echo $intervention["remarques"] ?></td>
                <td><?php echo $intervention["date_demande"] ?></td>
                <?php if($intervention["suivi"]){
                        echo "<td>Réparé</td>";
                      }else
                        echo "<td>En cours</td>";
                ?>
            <?php endforeach; ?>
        </table>
       
    </div> <!-- #contenu -->
  
<br>
<a href="index.php">Retour à l'accueil</a>

<?php include "templates/footer.php"; ?>
