
<!Doctype html>
<!--ETML
Auteur :Diego Da Silva
Date : 28.02.2022
Description : Page d'accueil qui montre les 5 dernières voiture ajouter
-->
<html lang="fr">
	<?php
	include_once('model/Database.php');
	$data = new Database();

	$cars = $data -> getAllCar();
	?>

<div class="container">
	<section class="py-5">
        <h2>Compte</h2>
        <h3>Vos voitures :

            <div class="container px-4 px-lg-5 mt-5">
			    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
						<div class="card h-100">
							<!-- Product details-->
							<div class="card-body p-4">
								<div class="text-center">
                                    <p> Ajouter un voiture</p>
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"  href="index.php?controller=account&action=add">Ajouter</a></div>
								</div>
							</div>
						</div>
			    </div>
            </div>
            <div class="container px-4 px-lg-5 mt-5">
			    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
						<div class="card h-100">
							<!-- Product details-->
							<div class="card-body p-4">
								<div class="text-center">
                                    <p> Supprimer une voiture</p>
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"  href="index.php?">Ajouter</a></div>
								</div>
							</div>
						</div>
			    </div>
            </div>
    </section> 
</div> 

