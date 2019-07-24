<?php require 'functions.php' ?>
<?php $title = $name?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Encodage et compatibilité -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Titre de la page -->
    <title><?= $title ?></title>

    <!-- Bootstrap --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <!-- Nom du Site et icone sur la navbar -->
  <a class="navbar-brand" href="index.php">Florea <i class="fab fa-angellist"></i></a>

  <!-- Bouton menu hamburger -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!--Div navbar -->
  <div class="collapse navbar-collapse" id="navbarNav">
    <!-- Liens -->
    <ul class="navbar-nav">
      <!-- Lien : Présentation -->
      <li class="nav-item <?php isActiveHome($title)?>">
        <a class="nav-link" href="index.php">Présentation</a>
      </li>
      <!-- Lien : Notre Magasin -->
      <li class="nav-item <?php isActiveShop($title)?>">
        <a class="nav-link" href="magasin.php">Notre Magasin</a>
      </li>
      <!-- Lien : Contact -->
      <li class="nav-item <?php isActiveContact($title)?>">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
    <!-- Fin liens -->
  </div>
</nav>
<!-- Fin Navbar -->