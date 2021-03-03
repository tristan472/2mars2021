<?php
require "header.php";

if (isset($_POST) && !empty($_POST)){
    $user = new UserModels([
            "first_name" => $_POST["first_name"],
            "last_name" => $_POST["last_name"],
            "email" => $_POST["email"],
            "passwd" => $_POST["passwd"],
            "default_address" => $_POST["default_address"],
            "role_id" => 1
    ]);
    $manager = new ManagerUser();
    $manager->insert($user);
}

?>


<body class="bg-dark">
	<h1 class="text-center text-title pt-5">Inscription</h1>
<div class="row formulaireInscription col-10 col-md-5 col-sm-7 margin-ci">
<div class="container col-md-9 py-5">
	<form method="post" class="pt-3">
		<div class="form-group">
			<label for="nom" class="display-5" >Nom</label>
			<input type="text"  id="email" class="form-control display-3" name="last_name" placeholder="Nom">
		</div>
		<div class="form-group">
			<label for="prenom" class="display-5" >Prenom</label>
			<input type="text"  id="prenom" class="form-control display-3" name="first_name" placeholder="Prénom">
		</div>
		<div class="form-group">
			<label for="email" class="display-5" >Email</label>
			<input type="email"  id="email" class="form-control display-3" name="email" placeholder="Email">
		</div>
		<div class="form-group">
			<label for="password" class="display-5" >Mot de passe</label>
			<input type="password"  id="password" class="form-control display-3" name="passwd" placeholder="Mot de passe">
		</div>
		<div class="form-group">
			<label for="verif_password" class="display-5" >Vérification mot de passe</label>
			<input type="password"  id="verif_password" class="form-control display-3" name="verif_password" placeholder="vérification du mot de passe">
		</div>
        <div class="form-group">
            <label for="address" class="display-5" >Adresse</label>
            <input type="text"  id="address" class="form-control display-3" name="default_address" placeholder="addresse">
        </div>
		<div class="text-center pt-3">
			<input type="submit" class="btn btn-outline-warning col-md-6 p-3" value="S'inscrire">
		</div>
	</form>
</div>
</div>
</body>

<?php
require "footer.php";
?>