<main>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                <img src="Public/carrousel.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="Public/carrousel1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="Public/carrousel2.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container text-center">
            <section class="row my-4">
            <?php foreach ($recettes as $recette) : ?>
            
                        <div class="col-4">
                            <article class="card h-100">
                                <img src="<?php echo $recette["url_img"] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $recette["titre"] ?></h5>
                                    <p class="fs-6"> <b>Auteur :</b> <?php echo $recette["email"] ?></p>
                                    <p class="card-text"><?php echo more($recette["description"],15) ?></p>
                                    <div class="card-footer text-body-secondary text-center">
                                        Catégorie : <?php echo $recette["nom"] ?>  /  Durée : <?php echo $recette["durre"] ?> heure
                                    </div>
                                    <a href="<?php echo URL ?>?page=recette&id=<?php echo $recette["id"] ?>" class="btn btn-dark mt-3">Voir plus</a>
                                </div>
                            </article>
                        </div>
                
            <?php endforeach ?>
            </section>
        </div>


        <nav aria-label="Page navigation example" class="d-flex justify-content-center">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
</main>