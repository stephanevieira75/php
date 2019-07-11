<?php
function ask_creneau($phrase = 'Veuillez enter un creneau ')
{
    echo $phrase . "\n";
    // boucle ouverture
    while (true)
    {
        $ouverture = (int)readline('Heure d\'ouverture : ' );
        // l'heure d'ouverture est supérieur ou egale a 0 et inférieur ou egale a 23 
        if ($ouverture >= 0 && $ouverture <= 23)
            break;
    }
    // boucle fermeture
    while (true)
    {
        $fermeture = (int)readline('Heure de fermeture : ' );
        // l'heure de fermeture est supérieur a l'ouverture
        if ($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture)
            break;
    }
    return [$ouverture, $fermeture];
}

$creneau = ask_creneau('Veuillez entrer votre creneau : ');

var_dump($creneau);

?>