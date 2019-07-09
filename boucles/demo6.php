<?php
$notes = [];
$action = null;
$i = 0;

// Tant que l'user ne tape pas 'fin'
while (true)
{
    $action = readline("Entrer une nouvelle note ou 'fin' : ");
    // On rajoute la note tapée au tableau notes
    if ($action === 'fin')
    {
        break;
    }
    else
    {
        $notes[] = (int)$action;
    }
}
// Pour chaque note dans notes
foreach ($notes as $note)
{
    // on affiche "$i - $note"
    echo "$i - $note \n";
    $i++;
}
?>