<?php
$notes = [15, 16, 12, 10];
$notes2 = &$notes;
$notes2[] =  10;

var_dump($notes, $notes2);

?>