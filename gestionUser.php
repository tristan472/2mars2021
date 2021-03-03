<?php
require "header.php";
$managerUser = new ManagerUser();
$users = $managerUser->getAll();
?>
<div class="bg-dark text-white">
    <div class="container">
        <!--
        <div class="alerteRienEstSéléctionné">
                <h2 class="alerteRienEstSéléctionné">Mais espèce de fils de pute séléctionne un truc pd h24 tu casse les couilles personne ne t'aime rend toi service suicide toi petite salope</h2>
            </div>
        -->    
        <h2 class="text-center py-3">Gestion des administrateurs</h2>
        <div class="row">
            <div class="col-12">
                <div class="d-block">
                    <?php
                    foreach ($users as $user):
                    ?>
                    <div class="border d-flex flex-wrap mb-md-3 mb-5">
                        <div class="w-100 pl-2">
                            <h3><?=$user->get_first_name();?> <?=$user->get_last_name();?></h3>
                            <p><?= $user->get_email(); ?></p>
                            <?php if($user->isAdmin()): ?>
                                <a class="float-right pr-3 pb-3 pb-md-0" href="removeAdmin.php?idUser=<?= $user->get_id(); ?>">Retirer Admin</a>
                            <?php else: ?>
                                <a class="float-right pr-3 pb-3 pb-md-0" href="addAdmin.php?idUser=<?= $user->get_id(); ?>">Ajouter Admin</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require "footer.php";
?>
