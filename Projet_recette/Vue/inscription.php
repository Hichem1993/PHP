<main class="container p-3">
    <h1 class="p-2">Inscription</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="email">Votre email</label>
            <input type="email" class="form-control" id="email" placeholder="Votre email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password">Votre password</label>
            <input type="password" class="form-control" id="password" placeholder="Votre password" name="password" required>
        </div>
        <div class="d-flex justify-content-center">
            <input type="submit" class="btn btn-outline-dark" value="Inscription">
        </div>
    </form>
    <?php foreach ($erreur as $erreurs) : ?>
        <div class="alert bg-danger mt-3 text-white"><?php echo $erreurs ?></div>
    <?php endforeach ?>
    <?php foreach ($succes as $success) : ?>
        <div class="alert bg-success mt-4 text-white"><?php echo $success ?></div>
    <?php endforeach ?>
</main>