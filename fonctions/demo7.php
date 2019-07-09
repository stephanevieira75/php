<?php
$insultes = ['putain', 'con', 'pute', 'salope'];
$entry = strtolower(readline("Entrer une phrase : "));


foreach ($insultes as $insulte)
{
    if ($entry == $insulte)
    {
        $letter = substr($insulte, 0, 1);
        $replace = $letter . str_repeat('*', strlen($insulte) - 1);
        $entry = str_replace($insulte, $replace , $entry);
    }
}

echo $entry . " \n";
?>