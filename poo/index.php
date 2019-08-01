<?php

// Premiere méthode
$date = new DateTime();
$date->modify('+1 month');
echo $date->format('d/m/Y');
echo "\n";

// Seconde méthode
$time = time();
$time = strtotime('+1 month', $time);
echo date('d/m/Y', $time);
?>