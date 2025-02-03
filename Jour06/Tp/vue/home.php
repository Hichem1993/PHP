<main class="container">
    <h1 class="text-center p-3">Page de connexion</h1>
    <form action="http://192.168.56.11/Jour06/Tp/index.php?page=bobo" method="POST" >
    <!-- Form a deux attributs : lien hypertext / method => POST -->
        <section class="row-cols-2" >
            <div class="form-floating col-4 offset-4 mb-3" >
                <input type="text" name="login" id="login" class="form-control" required>
                <label for="login">Votre login</label>
            </div>
            <div class="form-floating col-4 offset-4 mb-4" >
                <input type="text" name="password" id="password" class="form-control" required> 
                <label for="password">Votre password</label>
            </div>
        </section>
        <?php if (isset($_SESSION["erreur"])) : ?>
            <div class="alert alert-danger">
                    les identifiants sont invalides ...
            </div>
        <?php endif ?>
        <div class="d-flex justify-content-center" >
            <input type="submit" value="Envoyer" class="btn btn-outline-primary">
        </div>
    </form>
</main>