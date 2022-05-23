<div class="contentSigninLoginForm">
    <div class="d-flex justify-content-around my-5">
        <div class="col-md-4">
            <div class="card mb-4 product-wap rounded-0">
                <div class="card-body text-center">
                    <i class="fa fa-fw fa-user text-dark mr-1 text-success"></i>
                    <h3 class="text-success">Se connecter</h1>
                    
                    <?php
                    if(isset($_GET['error'])){
                        if($_GET['error'] == 1){
                    ?>
                        <div class="w-100 text-center mt-5">
                            <p class="text-danger">Veuillez renseigner correctement les champs</p>
                        </div>
                    <?php
                        }
                        if($_GET['error'] == 2){
                            ?>
                                <div class="w-100 text-center mt-5">
                                    <p class="text-danger">Le nom d'utilisateur ou le mot de passe ne correspond pas</p>
                                </div>
                            <?php
                        }
                        if($_GET['error'] == 3){
                            ?>
                                <div class="w-100 text-center mt-5">
                                    <p class="text-danger">Ce nom d'utilisateur n'est associé à aucun compte</p>
                                </div>
                            <?php
                        }
                    }
                    ?>

                    <form method="post" action="index.php?controller=connexion&action=checkLogin">
                        <label for="login" class="mt-4">Login :</label><br>
                        <input type="text" name="login" required><br>
                        <label for="password" class="mt-3">Mot de passe : </label><br>
                        <input type="password" name="password" required><br>
                        <input type="submit" name="btnSubmit" value="Se connecter" class="mt-5 btn-success">
                    </form>
                    <br>
                </div>
                <div class="w-100 text-center mb-5">
                    <p>Vous n'avez pas de compte ? <a class="text-success" href="index.php?controller=connexion&action=signin">Créer en un</a></p>
                </div>
                <div class="w-100 text-center mb-5">
                    <a href="index.php?controller=home&action=index" class="text-decoration-none text-success">Retour à la page d'acceuil</a>
                </div>
            </div>
        </div>
    </div>
</div>