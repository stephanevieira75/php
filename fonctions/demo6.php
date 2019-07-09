<?php

while (true)
{
    $mot = readline('Entre votre mot : ');
        if ($mot === '')
            exit("Fin du programme.\n");
        $reverse = strtolower(strrev($mot));
        if (strtolower($mot) === $reverse)
            echo "Ce mot est un palyndrome\n";
        else
            echo "Ce mot n'est pas un palyndrome.\n";
}
?>