<?php
$win = (int)readline('Entrer le nombre de victoire : ');
$lose = (int)readline('Entrer le nombre de défaite : ');

function ft_calculate($win, $lose)
{
    $result = ($win / ($win + $lose)) * 100;
    echo "Votre pourcentage de winrate est de $result%.\n";
};

ft_calculate($win, $lose);
?>