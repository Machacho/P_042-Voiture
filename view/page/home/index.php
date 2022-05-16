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
		<div>
			<h1>Bienvenue sur Voiture en folie !</h1>
			<p>Ce site à pour but de vous informer sur certaines voiture qui sont déjà enregistrée <br>
			   Si vous avez un compte chez nous, vous pourrez ajouter, modifier et supprimer ses propores voitures.
			</p><br><hr></br>
		</div>
		<div>
			<h2>Les 5 dernières voitures ajoutées !</h2>

			<div class="container px-4 px-lg-5 mt-5">
			<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
				<?php 
				foreach($cars as $key => $car){
					?>
					<div class="col mb-5">
						<div class="card h-100">
						<img class="card-img rounded-0 img-fluid" src="../../../resources/image/<?=$cars[$key]['voiImg'];?>" alt="Image of the cars">
							<!-- Product details-->
							<div class="card-body p-4">
								<div class="text-center">
									<!-- Product name-->
									<h5><?=$cars[$key]['voiMarque'];?></h5>
									<p><?=$cars[$key]['voiModel'];?></p>
								</div>
							</div>
							<!-- Product actions-->
							<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
								<div class="text-center"><a class="btn btn-outline-dark mt-auto"  href="index.php?controller=SingleCar&action=SingleCar&id=<?=$cars[$key]['idVoiture'];?>">Details</a></div>
							</div>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>

		<div>
	</section>
</div>
<script src="../../../resources/bootstrap/js/scripts.js"></script>