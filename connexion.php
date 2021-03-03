<?php
require "header.php";

if (isset($_POST) && !empty($_POST)){
    $manager = new ManagerUser();
    $manager->connect(new UserModels([
            "email" => $_POST["email"],
            "passwd" => $_POST["password"]
    ]));
    header("Location: index.php");
}
?>


<body class="bg-dark">
	<h1 class="text-center text-title pt-5">Connexion</h1>
	<div class="row formulaireInscription col-10 col-md-5 col-sm-7">
		<div class="container col-md-9 py-5">
			<form method="post" class="pt-3">
				<div class="form-group">
					<label for="email" class="display-5" >Email</label>
					<input type="email"  id="email" class="form-control display-3" name="email" placeholder="email">
				</div>
				<div class="form-group">
					<label for="password" class="display-5" >Mot de passe</label>
					<input type="password"  id="password" class="form-control display-3" name="password" placeholder="mot de passe">
        		</div>
				<div class="text-center pt-3">
					<input type="submit" class="btn btn-outline-warning col-md-6 p-3" value="Connexion">
				</div>
			</form>
		</div>
	</div>
</body>

<?php
require "footer.php";
?>