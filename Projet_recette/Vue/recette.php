<main class="container p-3">
    <?php foreach ($recettes as $recette) : ?>
        <article class="text-center">
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
        </article>
    <?php endforeach ?>
    <h3 class="p-3 text-center mt-3" style="color:#FF1493">Commentaires</h3>
    <?php foreach ($commentaires as $commentaire) : ?>
        <div class="card my-4">
          <div class="card-body">
            <p><?php echo $commentaire["message"] ?></p>
            <div class="d-flex justify-content-between">
              <div class="d-flex flex-row align-items-center">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25" height="25" />
                <p class="small mb-0 ms-2"><?php echo $commentaire["email"] ?></p>
              </div>
              <div class="d-flex flex-row align-items-center">
                <p class="small text-muted mb-0"><?php echo $commentaire["dt_creation"] ?></p>
              </div>
            </div>
          </div>
        </div>
    <?php endforeach ?>
    <h3 class="p-3 text-center mt-3" style="color:#FF1493">Ajouter un commentaire</h3>
    <form method="POST">
        <?php if( !$show_email ) : ?>
            <div class="mb-3">
                <label for="email">Votre email</label>
                <input type="email" class="form-control" id="email" placeholder="Votre email" name="email" required>
            </div>
        <?php endif ?>
        <div class="mb-3">
            <label for="password">Votre commentaire</label>
            <textarea name="commentaire" id="commentaire" class="form-control" placeholder="Votre commentaire"></textarea>
        </div>
        <div class="d-flex justify-content-center">
            <input type="submit" class="btn btn-outline-dark" value="Ajouter">
        </div>
    </form>
</main>