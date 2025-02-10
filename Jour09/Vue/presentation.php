<main class="container">
    <h1 class="p-4"> Présentation </h1>
    <p>Voici l'ensemble de projet que j'ai réalisés :</p>
    <section class="row">
    <?php foreach ($projets as $projet) : ?>
        <div class="col-3">
            <article class="card h-100">
                <div class="card-body">
                    <h2 class="card-title"><?php echo $projet["nom"] ?> </h2>
                    <p class="card-text"><?php echo $projet["duree"] . " " . $projet["unite"] ?> </p>
                </div>
                <div class="card-footer">
                    <?php foreach (explode("," , $projet["technos"]) as $technos) : // explode = string to array en php / "," : le séparateur ?>  
                        <span class="badge bg-primary me-3">
                            <?php echo $technos ?>
                        </span>
                    <?php endforeach ?>
                </div>
            </article>
        </div>
    <?php endforeach ?>
    </section>
</main>
