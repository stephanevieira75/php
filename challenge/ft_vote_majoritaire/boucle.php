<?php
// Require le tableau et les phrases pour les readlines
require 'tableau.php';
require 'phrase.php';

// On demande a l'utilisateur le nom du candidat
$nom = readline($phrase['nom']);

while (true){
// Conditions pour les noms

// Balou
if ($nom == 'Balou' || $nom == 'balou')
{
    echo "Vous avez choisi le candidat $nom !\n";
    // On demande a l'utilisateur la mention pour le candidat
    $mention = readline($phrase['mention']);
    // On insere + 1 a la mention du candidat
    $tableau[0]['mention'][$mention] += 1;
    echo $nom . " a recu la mention : " . $mention . ".\n";
    $nom = readline($phrase['nom']);
}    
// Hermione
else if ($nom == 'Hermione' || $nom == 'hermione')
{
    echo "Vous avez choisi le candidat $nom !\n";
    // On demande a l'utilisateur la mention pour le candidat
    $mention = readline($phrase['mention']);
    // On insere + 1 a la mention du candidat
    $tableau[1]['mention'][$mention] += 1;
    echo $nom . " a recu la mention : " . $mention . ".\n";
    $nom = readline($phrase['nom']);
}     
// Chuck Norris
else if ($nom == 'Chuck-Norris' || $nom == 'chuck-norris')
{
    echo "Vous avez choisi le candidat $nom !\n";
    // On demande a l'utilisateur la mention pour le candidat
    $mention = readline($phrase['mention']);
    // On insere + 1 a la mention du candidat
    $tableau[2]['mention'][$mention] += 1;
    echo $nom . " a recu la mention : " . $mention . ".\n";
    $nom = readline($phrase['nom']);
}
// Elsa
else if ($nom == 'Elsa' || $nom == 'elsa')
{
    echo "Vous avez choisi le candidat $nom !\n";
    // On demande a l'utilisateur la mention pour le candidat
    $mention = readline($phrase['mention']);
    // On insere + 1 a la mention du candidat
    $tableau[3]['mention'][$mention] += 1;
    echo $nom . " a recu la mention : " . $mention . ".\n";
    $nom = readline($phrase['nom']);
}
// Gandalf
else if ($nom == 'Gandalf' || $nom ==  'gandalf')
{
    echo "Vous avez choisi le candidat $nom !\n";
    // On demande a l'utilisateur la mention pour le candidat
    $mention = readline($phrase['mention']);
    // On insere + 1 a la mention du candidat
    $tableau[4]['mention'][$mention] += 1;
    echo $nom . " a recu la mention : " . $mention . ".\n";
    $nom = readline($phrase['nom']);
}
    // Beyonce
else if ($nom == 'Beyonce' || $nom ==  'beyonce')
{
        echo "Vous avez choisi le candidat $nom !\n";
        // On demande a l'utilisateur la mention pour le candidat
        $mention = readline($phrase['mention']);
        // On insere + 1 a la mention du candidat
        $tableau[5]['mention'][$mention] += 1;
        echo $nom . " a recu la mention : " . $mention . ".\n";
        $nom = readline($phrase['nom']);
}
// Quitter la boucle
else if ($nom == 'q' || $nom == 'Q')
    break;
// boucle tant que l'utilisateur n'a pas inserer un nom ou 'q'
else 
    $nom = readline($phrase['nom']);
}
?>