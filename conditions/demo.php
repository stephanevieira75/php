<?php 
// Input readline name
$name = readline("Entrez votre nom :\n");

// Tableaux candidats
$candidats = [
    // Jean
    [
        $name  => 'Jean',
        'note' => 12
    ],
    // Patrick
    [
        $name => 'Patrick',
        'note' => 9
    ]
];

// Candidat 0
if ($name === "Jean")
{
    // Si supérieur ou égale
    if ($candidats[0]['note'] >= 10)
    {
        echo 'Salut, ' . $candidats[0][$name] . ",\nTu es diplomé. En effet, tu as eu la note de : " . $candidats[0]['note'] . "/20. Felicitations !\nFin du programme.\n";
    }
    // Si inférieur
    else
    {
        echo 'Désolé ' . $candidats[0][$name] . ",\nTu n'as pas obtenu la moyenne. En effet, tu as eu la note de : " . $candidats[0]['note'] . "/20. Dommage !\nFin du programme.\n";
    }
}
// Candidat 1
else if ($name === "Patrick")
{
    // Si supérieur ou égale
    if ($candidats[1]['note'] >= 10)
    {
        echo 'Salut, ' . $candidats[1][$name] . ",\nTu es diplomé. En effet, tu as eu la note de : " . $candidats[1]['note'] . "/20. Felicitations !\nFin du programme.\n";
    }
    // Si inférieur
    else
    {
        echo 'Désolé ' . $candidats[1][$name] . ",\nTu n'as pas obtenu la moyenne. En effet, tu as eu la note de : " . $candidats[1]['note'] . "/20. Dommage !\nFin du programme.\n";
    }
}
// Candidat inexistant
else 
{
    echo "Désolé, le candidat n'existe pas.\nFin du programme.\n";
}

?>