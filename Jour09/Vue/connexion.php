<main class="container">
    <h1 class="p-4"> Accès au back office </h1>
    <p>Vous pouvez connecter :</p>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="email">Votre email</label>
            <input type="email" class="form-control" id="email" placeholder="Votre email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password">Votre password</label>
            <input type="password" class="form-control" id="password" placeholder="Votre password" name="password" required>
        </div>
        <div class="d-flex justify-content-center">
            <input type="submit" class="btn btn-outline-info" value="Connexion">
        </div>
    </form>
    <?php foreach ($erreur as $erreurs) : ?>
        <div class="alert bg-warning mt-3"><?php echo $erreurs ?></div>
    <?php endforeach ?>
</main>