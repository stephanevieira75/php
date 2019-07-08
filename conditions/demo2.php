<?php
// Variables
$note = (int)readline("Entrez votre note: ");

// Si la variable note n'est pas un nombre
if ($note >= 'a' && $note <= 'z')
{
    echo "La note doit etre un nombre, compris entre 0 et 20.\n";
}
// Si la variable note est un nombre
else if ($note >= 0 && $note < 21)
{

    // Candidat supérieur à 10/20
    if ($note >= 10)
    {
        // note égale à 10/20
        if ($note === 10)
        {
            echo "Vous avez juste la moyenne, passable.\n";
        }
        // note supérieur à 10/20 et inférieur ou égale à 12/20
        else if ($note > 10 && $note <= 12)
        {
            echo "Vous avez $note/20, c'est un peu plus que la moyenne, encouragement.\n";
        }
        // note supérieur à 12/20 et inférieur ou égale à 14/20
        else if ($note > 12 && $note <= 14)
        {
            echo "Vous avez $note/20, bon travail.\n";
        }
        // note supérieur à 14/20 et inférieur à 21/20
        else
        {
            echo "Vous avez $note/20, felicitations!\n";
        }
    }
    // Candidat inférieur à 10/20
    else 
    {
        echo "Malheureusement, vous n'avez pas eu la moyenne. En effet vous avez eu $note/20.\n";
    }
}
// Note non-comprise entre 0/20 et 20/20 
else{
    echo "La note doit etre comprise entre 0 et 20.\n";
}
?>