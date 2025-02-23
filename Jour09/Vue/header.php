<!doctype html>
<html lang="fr-FR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $titre ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <header class="bg-success">
        <nav class="navbar navbar-expand navbar-dark container">
            <span class="navbar-brand">
                Mon premier MVC
            </span>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="<?php echo URL ?>" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="<?php echo URL ?>?page=presentation" class="nav-link">Présentation</a></li>
                <li class="nav-item"><a href="<?php echo URL ?>?page=contact" class="nav-link">Nous contacter</a></li>
                <?php if( !isset($_SESSION["user"]) ) : ?>
                  <li class="nav-item"><a href="<?php echo URL ?>?page=inscription" class="nav-link">Inscription</a></li>
                  <li class="nav-item"><a href="<?php echo URL ?>?page=connexion" class="nav-link">Connexion</a></li>
                <?php else : ?>
                  <li class="nav-item"><a href="<?php echo URL ?>?page=admin/dashboard" class="nav-link">Back Office</a></li>
                  <li class="nav-item"><a href="<?php echo URL ?>?page=deconnexion" class="nav-link">Déconnexion</a></li>
                <?php endif ?>
            </ul>
        </nav>
    </header>