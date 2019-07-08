<?php
$eleves = [
    // Jean
    [
        'nom' => 'Jean',
        'classe' => 'CM2',
        'moyenne' => 12
    ],
    // Patrick
    [
        'nom' => 'Patrick',
        'classe' => 'CM1',
        'moyenne' => 14
    ],
    // Elisa
    [
        'nom' => 'Elisa',
        'classe' => 'CE2',
        'moyenne' => 15
    ],
    // Pierre
    [
        'nom' => 'Pierre',
        'classe' => 'CE1',
        'moyenne' => 16
    ],
    // Jeanne
    [
        'nom' => 'Jeanne',
        'classe' => 'CP',
        'moyenne' => 10
    ]
];

for ($i = 0; $i < $eleves[$i]; $i++)
{
    echo "$i - Nom : " . $eleves[$i]['nom'] . " / Classe : ". $eleves[$i]['classe'] . " / Moyenne : " . $eleves[$i]['moyenne'] . "\n";
}