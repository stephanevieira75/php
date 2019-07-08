<?php
// Variable
$win = readline("Entrez votre nombre de victoires : ");
$lose = readline("Entrez votre nombre de defaites : ");
$calculate = ($win / ($win + $lose)) * 100;

// Instructions
echo "Votre pourcentage de winrate est de : $calculate%.\n";
?>