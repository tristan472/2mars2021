<?php
require "header.php";

if($_SESSION["is_connected"]){
    $manager = new ManagerUser();
    $user = $manager->getById($_SESSION["id"]);
    if(isset($_POST) && !empty($_POST)){
        $user->set_first_name($_POST["first_name"]);
        $user->set_last_name($_POST["last_name"]);
        $user->set_email($_POST["email"]);
        $user->set_passwd(password_hash($_POST["passwd"], PASSWORD_DEFAULT));
        $manager->update($user);
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}
?>

<div class="bg-dark py-5">
    <div class="container">
        <div class="éditerProduit">
            <div class="éditerProduitTitre"><h2 class="text-center">Modifier les infos du profil</h2></div>
            <div class="row donnéesPersonnelles">
                <form class="w-100" role="form" action="modifyProfil.php" method="post">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="control-label">Titre :</label>
                            <input class="form-control" type="text" name="title" value="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="control-label">Prix :</label>
                            <input class="form-control" type="text" name="price_ttc" value="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="control-label">Description :</label>
                            <input class="form-control" type="text" name="description" value="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="control-label">Cathégorie :</label>
                            <input class="form-control" type="text" name="category" value="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="myfile">Choisir une image :</label>
                            <input type="file" id="myfile" name="myfile">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="submit" class="btn btn-outline-warning" value="Enregister">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require "footer.php";
?>
