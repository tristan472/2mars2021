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
        <div class="éditerProfile">
            <div class="éditerProfileTitre"><h2 class="text-center">Modifier le profil</h2></div>
            <div class="row donnéesPersonnelles">
                <form class="w-100" role="form" action="modifyProfil.php" method="post">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="control-label">Prénom :</label>
                            <input class="form-control" type="text" name="first_name" value="<?= $user->get_first_name(); ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="control-label">Nom :</label>
                            <input class="form-control" type="text" name="last_name" value="<?= $user->get_last_name(); ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="control-label">Email :</label>
                            <input class="form-control" type="text" name="email" value="<?= $user->get_email(); ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="control-label">Mot de passe :</label>
                            <input class="form-control" type="password" name="passwd">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="control-label">Confirmer le mot de passe :</label>
                            <input class="form-control" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="submit" class="btn btn-outline-warning" value="Enregister">
                            <span></span>
                            <input type="reset" class="btn btn-outline-primary" value="Defaut">
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
