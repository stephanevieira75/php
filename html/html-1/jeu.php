<?php
// Tableau des parfums de glace
$parfums = 
[
    'Fraise' => 4,
    'Vanille' => 3,
    'Chocolat' => 5
    
];
// Tableau de la taille de la glace
$cornets = 
[
    's' => 2,
    'm' => 3,
    'l' => 4,
    'xl' => 5
];
// Tableau des supplements de la glace
$supplements = 
[
    'Pépites de chocolat' => 1,
    'Chantilly' => 0.5
];

//On appelle le fichier header.php
require 'header.php';
require 'functions.php';
?>
<div class="jumbotron">
    <h1 class="text-center">Composer votre glace :</h1>
</div>
<!-- Formulaire du jeu -->
<form action="/jeu.php" method="GET">


    <h2>Choisi les parfums de ta glace: </h2>
    <?php foreach ($parfums as $parfum => $prix): ?>
    <div class="checkbox">
        <label>
            <?= checkbox('parfum', $parfum, $_GET) ?>
            <?= $parfum ?> - <?= $prix ?>€
        </label>
    </div>
    <?php endforeach ?>

    <h2>Choisi la taille de ton cornet: </h2>
    <?php foreach ($cornets as $cornet => $prix): ?>
    <div class="radio">
        <label>
            <?= radio('cornet', $cornet, $_GET) ?>
            <?= $cornet ?> - <?= $prix ?>€
        </label>
    </div>
    <?php endforeach ?>

    <h2>Choisi ton supplément: </h2>
    <?php foreach ($supplements as $supplement => $prix): ?>
    <div class="checkbox">
        <label>
            <?= checkbox('supplement', $supplement, $_GET) ?>
            <?= $supplement ?> - <?= $prix ?>€
        </label>
    </div>
    <?php endforeach ?>

    <button type="submit" class="btn btn-primary">Composer ma glace</button>
</form>

<pre>
    <h1>$_GET</h1>
    <?php var_dump($_GET); ?>
</pre>

<pre>
    <h1>$_POST</h1>
    <?php var_dump($_POST); ?>
</pre>

 <!-- On appelle le fichier footer.php -->
<?php require 'footer.php'?>