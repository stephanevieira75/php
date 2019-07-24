<?php
// Fontion pour le lien home
function isActiveHome(string $name)
{
    // Si le nom de la page est : présentation
    if ($name === 'Présentation')
        echo 'active';
    // Sinon renvoi 0
    else
        return 0;
}
// Fonction pour le lien magasin
function isActiveShop(string $name)
{
    // Si le nom de la page est : notre magasin
    if ($name === 'Notre Magasin')
        echo 'active';
    // Sinon renvoi 0
    else
        return 0;
}
// Fonction pour le lien contact
function isActiveContact(string $name)
{
    // Si le nom de la page est : contact
    if ($name === 'Contact')
        echo 'active';
    // Sinon renvoi 0
    else
        return 0;
}
?>