<?php
// Fonction dire oui ou non
function sayYesOrNo($words)
{
    while (true)
    {
        $action = readline($words);
        // Si l'action est différent de Oui ou Non

        if ($action == 'O' || $action == 'o')
            return true;
        else if ($action == 'N' || $action == 'n')
            return false;
    }
}

$result = sayYesOrNo('Say yes or no : (O/N)');
var_dump($result);
?>