<main class="container">
    <h1>Page de connexion</h1>
    <form action="http://192.168.56.11/Jour06/Projet/index.php?page=alain" method="POST" >
    <!-- Form a deux attributs : lien hypertext / method => POST -->
        <section class="row" >
            <div class="form-group col" >
                <label for="login">Votre login</label>
                <input type="text" name="login" id="login" class="form-control" required>
            </div>
            <div class="form-group col" >
                <label for="password">Votre password</label>
                <input type="text" name="password" id="password" class="form-control" required> 
            </div>
        </section>
        <div class="mt-4 d-flex justify-content-center" >
            <input type="submit" value="Envoyer" class="btn btn-primary">
        </div>
    </form>
</main>