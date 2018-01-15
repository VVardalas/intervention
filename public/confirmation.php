<?php include "templates/header.php"; ?>


<?php
    if(isset($_POST['submit'])){
        // Fetching variables of the form which travels in URL
        $nom = $_POST['nom'];
        $bureau = $_POST['bureau'];
        $probleme = $_POST['probleme'];
        $supplement = $_POST['supplement'];
        $description = $_POST['description'];
        if($nom !=''&& $bureau !=''&& $probleme !=''&& $supplement !='' && $description !='')
        {
            //
        }
    }
    
?>
    <h1 class="h1">Récapitulatif</h1>
    <div id="contenu" class="contenu">
        <form method="post" action="enregistrement_formulaire.php" name="form" id="form">
        <label for="nom">Votre nom : </label>
        <input type="text" name="nom" id="nom" value="<?php echo $nom ?>" readonly>

        <label for="bureau">Bureau n° :</label>
        <input type="text" name="bureau" id="bureau" value="<?php echo $bureau ?>" readonly>
         
        <br>
        <br>
        <textarea name="probleme" id="probleme" cols="40" rows="5" readonly> 
            <?php echo $probleme." : ". $supplement ?>
        </textarea>
         
         <br>        
         <br>        

         <textarea type="text" name="description" id="description" cols="40" rows="5" readonly>
             <?php echo $description ?>
         </textarea>
         
         <br>
         <br>
        <input type="submit" name="submit" value="Valider">
    </form>
    </div>

    <br>
<a href="index.php">Retour à l'accueil</a>

<?php include "templates/footer.php"; ?>

        
