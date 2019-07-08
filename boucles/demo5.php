<?php
$eleves = [
    'cm2' => ['Jean', 'Marc', 'Patrick', 'Marion'],
    'cm1' => [ 'Emilie', 'Julien', 'Albert', 'Denis']
];

foreach ($eleves as $classe => $listEleves)
{
    echo "La classe de $classe :\n";
    $i = 0;
    foreach($listEleves as $eleve)
    {
        $i++;
        echo "$i - $eleve.\n";
    }
    echo "\n";
}

?>