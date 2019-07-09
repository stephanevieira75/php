<?php
$entry = strtolower(readline('Inserer un mot : '));
$reverse = strrev($entry);
if ($entry === $reverse)
{
    echo "$entry est un palyndrome! \n";
}
else
{
    echo "$entry n'est pas un palyndrome! \n";
}
?>