<main class="container p-3 text-center">
    <?php foreach ($recettes as $recette) : ?>
        <h1 class="p-2" style="color:#FF1493"><?php echo $recette["titre"] ?></h1>
        <img src="<?php echo $recette["url_img"] ?>" alt="<?php echo $recette["titre"] ?>" class="w-75">
        <div class="d-flex justify-content-around p-3">
            <p class="m-0"><b>Date de création :</b> <?php echo $recette["dt_creation"] ?></p>
            <p class="m-0"><b>Créateur :</b> <?php echo $recette["email"] ?></p>
        </div>
        <h4 class="p-2">Catégorie : <?php echo $recette["nom"] ?></h4>
        <h5 class="p-2">Description :</h5>
        <p class="p-2"><?php echo $recette["description"] ?></p>
        <p class="m-0 p"><b>Durée :</b> <?php echo $recette["durre"] ?> heure</p>
    <?php endforeach ?>
</main>