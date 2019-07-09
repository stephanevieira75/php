<?php
$creneaux = [];

while (true)
{
    $debut = (int)readline('Heure d\'ouverture : ');
    $fin =  (int)readline('Heure de fermeture : ');
    if ($debut >= $fin)
    {
        echo "Le créneaux ne peut pas être enregistrer car l'heure de début ($debut h) est supérieur à l'heure de fin ($fin h).";
    }
    else
    {
        $creneaux[] = [$debut, $fin];
        $action = readline('Voulez-vous enregistrer un nouveau créneaux ? (O/N) : ');
        if ($action === 'n' || $action === 'N')
        {
            break;
        }
    }
}
$heure = readline("A qu'elle heure voulez-vous visiter le magasin : ");
$creneauTrouve = false;

foreach ($creneaux as $creneau)
{
    if ($heure >= $creneau[0] && $heure <= $creneau[1])
    {
        $creneauTrouve = true;
        break;
    }
}

if ($creneauTrouve)
{
    echo 'le magasin est ouvert';
}
else 
{
    echo 'Désolé, le magin sera fermé :(';
}
?>