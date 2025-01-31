<main class="container">
    <h1>Accueil</h1>
    <p>Liste des étudiants :</p>
    <section class="row">
        <?php foreach($annuaire as $cle => $valeur) : ?>
            <div class="col-3">
                <article>
                    <img src="https://picsum.photos/300/200" alt="">
                    <h2 class="card-title"><?php echo $cle ?></h2>
                </article>
            </div>
        <?php endforeach ?>
    </section>
</main>