<?php
//Variables 
$aDeviner = 150;
$erreur = null;
$succes = null;
$value = null;

/* Début de condition :
Si la variable globale n'a pas d'entrée: */
if (isset($_POST['chiffre']))
{
    $value = (int)$_POST['chiffre'];
    // Si le chiffre est trop grand :
    if ($value > $aDeviner)
    {
        $erreur = "Votre chiffre est trop grand !";
    }
    // Si le chiffre est trop petit :
    else if ($value < $aDeviner){
        $erreur = "Votre chiffre est trop petit !";
    }
    // Si le chiffre est le bon
    else
    {
        $succes = "Bravo vous avez deviné le chiffre : $aDeviner";
    }

}
//On appelle le fichier header.php
require 'header.php';
?>

<pre>
    <h1>$_GET</h1>
    <?php var_dump($_GET); ?>
</pre>

<pre>
    <h1>$_POST</h1>
    <?php var_dump($_POST); ?>
</pre>

<?php if ($erreur): ?>
    <div class="alert alert-danger">
        <?= $erreur ?>
    </div>
<?php elseif ($succes): ?>
    <div class="alert alert-success">
        <?= $succes ?>
    </div>
<?php endif ?>

<!-- Formulaire du jeu -->
<form action="/jeu.php" method="POST">
    <div class="form-group">
        <!-- Input -->
        <input type="number" class="form-control" name="chiffre" placeholder="Entre 0 et 1000" value="<?= $value ?>">
    </div>
        <!-- Submit -->
        <button class="btn btn-primary" type="submit">Deviner</button>
</form>


 <!-- On appelle le fichier footer.php -->
<?php require 'footer.php'?>