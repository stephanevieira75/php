<?php

// Fonction qui dit bonjour !
function sayHello($name = null)
{
    if ($name === null)
    {
        $name = 'User';
    }
    return "Hello $name!\n";
}

$hello = sayHello();
echo $hello;

?>