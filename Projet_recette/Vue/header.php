<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $titre ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <header>
            <nav class="navbar navbar-expand-lg bg-dark text-white p-2">
                <div class="container text-white">
                    <a class="navbar-brand fs-1 text-white" href="<?php echo URL ?>">Recette de cuisine</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                    <ul class="navbar-nav text-white">
                        <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="<?php echo URL ?>">Accueil</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo URL ?>?page=inscription">Inscription</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo URL ?>?page=connexion">Connexion</a>
                        </li>
                    </ul>
                    </div>
                </div>
        </nav>
    </header>