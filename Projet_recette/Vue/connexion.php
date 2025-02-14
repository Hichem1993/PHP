<main class="container p-3">
    <h1 class="p-2">Connexion</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="email">Votre email</label>
            <input type="text" class="form-control" id="email" placeholder="Votre email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password">Votre password</label>
            <input type="text" class="form-control" id="password" placeholder="Votre password" name="password" required>
        </div>
        <div class="d-flex justify-content-center">
            <input type="submit" class="btn btn-outline-dark" value="Connexion">
        </div>
    </form>
    <?php foreach ($erreur as $erreurs) : ?>
        <div class="alert bg-danger mt-3 text-white"><?php echo $erreurs ?></div>
    <?php endforeach ?>
</main>