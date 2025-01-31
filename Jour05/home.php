<main class="container">
    <h1>Page d'Accueil</h1>
    <p>Liste des pays visités :</p>

    <ul>
        <!-- Foreach mixer du Php et Html -->
        <?php foreach($pays as $cle => $valeur) : ?>
            <li><?php echo $cle ?></li>
        <?php endforeach ?>
    </ul>

</main>