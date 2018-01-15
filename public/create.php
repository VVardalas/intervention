<?php
//Model
require 'model.php';

$categories_interventions = getCategoriesInterventions();

?>

<?php include "templates/header.php"; ?>

<h1 class="h1">Demande d'intervention</h1>

 <div id="contenu" class="contenu">
     <form method="post" action="confirmation.php" name="form" id="form">
        <label for="nom">Votre nom : </label>
        <input type="text" name="nom" id="nom">

        <label for="bureau">Bureau n° :</label>
        <input type="text" name="bureau" id="bureau">
         
         <br>
        <div class="contenu"> 
            <label for="probleme">Votre problème concerne :</label>
            <?php foreach($categories_interventions as $categorie_intervention): ?>
                <input type="radio" name="probleme" id="probleme" value="<?php echo $categorie_intervention["categorie"] ?>"><?php echo $categorie_intervention["categorie"] ?>
                <br>
            <?php endforeach; ?>
        </div>
         
         <br>
        <label for="supplement">Eventuellement, saisissez le ou les numéro(s) d'ordinateur(s) qui vous pose(nt) un problème</label>
        <input type="text" name="supplement" id="supplement">
         
         <br>
        

        <label for="description">Décrivez précisément votre problème</label>
         <textarea type="text" name="description" id="description" cols="40" rows="5">
         </textarea>
         
         <br>
         <br>
        <input type="submit" name="submit" value="Valider">
    </form>
</div>

<a href="index.php">Retour à l'accueil</a>


<?php include "templates/footer.php"; ?>