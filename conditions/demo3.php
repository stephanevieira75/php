<?php
// Variables player
$player_1 = [
    'name' => 'Jacky',
    'attack' => rand(10, 20),
    'block' => rand(0, 10),
    'HP' => 100,
];
$player_2 = [
    'name' => 'Rambo',
    'attack' => rand(10, 20),
    'block' => rand(0, 10),
    'HP' => 100
];

// Input readline jeu
$action = (int)readline("Entrez votre action :(1)-: Attaquer (2)-: Defendre (3)-: S'enfuir :");

// On vérifie si l'action est un nombre entre 1 et 3
if ($action >= 'a' && $action <= 'z' || $action < 1 || $action > 3)
{
    echo "Erreur! Votre action doit etre un nombre supérieur ou égale a 1 et inférieur ou égale à 3.\n";
}
else
{
    // C'est bien un nombre compris entre 1 et 3
    switch ($action)
    {
        // Si l'action est d'attaquer
        case ($action === 1):
            echo "Vous avez choisi d'attaquer !\n";
            $player_2['HP'] = ($player_2['HP'] - ($player_1['attack'] - $player_2['block']));
            echo $player_1['name'] . ' attaque ' . $player_2['name'] . ' ! Il lui inflige : ' . $player_1['attack'] . ' dégats mais ' . $player_2['name'] . ' block ' . $player_2['block'] . " dégats.\nIl reste " . $player_2['HP'] . ' HP à '. $player_2['name'] . ".\n";
            break;
        // Si l'action est de se defendre
        case ($action === 2):
            echo "Vous avez choisi de vous défendre !\n";
            $player_1['HP'] = ($player_1['HP'] - ($player_2['attack'] - $player_1['block']));
            echo $player_2['name'] . ' attaque ' . $player_1['name'] . ' ! Il lui inflige : ' . $player_2['attack'] . ' dégats mais ' . $player_1['name'] . ' block ' . $player_1['block'] . " dégats.\nIl reste " . $player_1['HP'] . ' HP à '. $player_1['name'] . ".\n";
            break;
        // Si l'action est de prendre la fuite
        case ($action === 3):
            echo "Vous avez pris la fuite.\nPoule mouillée!\n";
            break;
    }
}

/*
// Methode if else

// On vérifie si l'action est un nombre entre 1 et 3
if($action >= 'a' && $action <= 'z' || $action < 1 || $action > 3)
{
    echo "Erreur! Votre action doit etre un nombre supérieur ou égale a 1 et inférieur ou égale à 3.\n";
}
// Si l'action est d'attaquer
else if ($action === 1)
{
    echo "Vous avez choisi d'attaquer !\n";
    $player_2['HP'] = ($player_2['HP'] - ($player_1['attack'] - $player_2['block']));
    echo $player_1['name'] . ' attaque ' . $player_2['name'] . ' ! Il lui inflige : ' . $player_1['attack'] . ' dégats mais ' . $player_2['name'] . ' block ' . $player_2['block'] . " dégats.\nIl reste " . $player_2['HP'] . 'HP à '. $player_2['name'] . ".\n";
}
// Si l'action est de se defendre
else if ($action === 2)
{
    echo "Vous avez choisi de vous défendre !\n";
    $player_1['HP'] = ($player_1['HP'] - ($player_2['attack'] - $player_1['block']));
    echo $player_2['name'] . ' attaque ' . $player_1['name'] . ' ! Il lui inflige : ' . $player_2['attack'] . ' dégats mais ' . $player_1['name'] . ' block ' . $player_1['block'] . " dégats.\nIl reste " . $player_1['HP'] . 'HP à '. $player_1['name'] . ".\n";
}
// Si l'action est de prendre la fuite
else {
   echo "Vous avez pris la fuite.\nPoule mouillée!\n";
}
*/
?>