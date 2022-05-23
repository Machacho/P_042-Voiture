<div class="contentSigninLoginForm">
    <div class="d-flex justify-content-around my-5">
        <div class="col-md-4">
            <div class="card mb-4 product-wap rounded-0">
                <div class="card-body text-center">
                    <i class="fa fa-fw fa-user text-dark mr-1 text-success"></i>
                    <h3 class="text-success">Créer un compte</h3>

                    <?php
                    if(isset($_GET['error'])){
                        if($_GET['error'] == 1){
                    ?>
                        <div class="w-100 text-center mt-5">
                            <p class="text-danger">Veuillez renseigner correctement les champs</p>
                        </div>
                    <?php
                        }elseif($_GET['error'] == 2){
                    ?>
                        <div class="w-100 text-center mt-5">
                            <p class="text-danger">Les mots de passes ne correspondent pas</p>
                        </div>
                    <?php
                        }
                    }
                    ?>

                    <form method="post" action="index.php?controller=connexion&action=checkSignin">
                        <label for="login" class="mt-4">Nom d'utilisateur :</label><br>
                        <input type="text" name="login" maxlength="50" required><br>
                        <label for="password" class="mt-3">Mot de passe : </label><br>
                        <input type="password" name="password" minlength="8" required><br>
                        <label for="passwordConfirm" class="mt-3">Confirmer le mot de passe : </label><br>
                        <input type="password" name="passwordConfirm" minlength="8" required><br>
                        <!-- <i class="fa fa-eye-slash" id="togglePassword"></i><br> -->
                        <input type="submit" name="btnSubmit" value="Créer" class="mt-5 btn-success">
                    </form>
                    <br>
                </div>
                <div class="w-100 text-center mb-5">
                    <p>Vous avez déjà un compte ? <a class="text-success" href="index.php?controller=connexion&action=login">Connectez-vous</a></p>
                </div>
                <div class="w-100 text-center mb-5">
                    <a href="index.php?controller=home&action=index" class="text-decoration-none text-success">Retour à la page d'acceuil</a>
                </div>
            </div>
        </div>
    </div>
</div>