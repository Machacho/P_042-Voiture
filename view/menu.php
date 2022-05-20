<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container px-4 px-lg-5">
	<a  href="index.php?controller=home&action=index" ><img id="logo" src="resources/image/logo.PNG" alt="Image of the cars">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
				<li class="nav-item"><a class="nav-link" aria-current="page" href="index.php?controller=home&action=index">Accueil</a></li>
				<li class="nav-item"><a class="nav-link" href="index.php?controller=listCar&action=list">Liste des voitures</a></li>
				<li class="nav-item"><a class="nav-link" href="index.php?controller=account&action=list">Compte</a></li>
				
				<li class="nav-item"><a class="nav-link" href="index.php?controller=contact&action=contact">Contact</a></li>
			</ul>
			<form class="d-flex">
				<button class="btn btn-outline-dark" type="submit">
					Connexion
				</button>
			</form>
		</div>
	</div>
</nav>