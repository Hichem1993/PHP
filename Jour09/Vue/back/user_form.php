<main class="container">
    <h1>Créer un nouveau profil Utilisateur</h1>
    <section class="row">
        <div class="col-3">
            <?php include("menu-back.php") ?>
        </div>
        <div class="col-9">
            <form method="POST">
                <input type="hidden" name="id" value="">
                <div class="mb-3">
                    <label for="email">email</label>
                    <input type="email" name="email" id="email" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label for="role">Role</label>
                    <select name="role" id="role" class="form-select">
                        <option value="">Veuillez selectionner un role :</option>
                        <option value="redacteur">Rédacteur</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="d-flex justify-content-end">
                    <input type="submit" value="Créer" class="btn btn-success">
                </div>
            </form>
        </div>
    </section>
</main>