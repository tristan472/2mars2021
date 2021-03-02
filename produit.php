<?php

require "header.php";

$articleManager = new ManagerProduct();
$article = $articleManager->getById($_GET["productId"]);
?>
<div class="container-fluid bg-dark">
    <div class="row">
        <div class="col">
            <div class="slide">
                <?php
                $controleur = new ManagerPicture();
                $images = $controleur->getProductPicture($_GET["productId"]);
                foreach ($images as $image):
                    ?>
                    <div class="imgProduit"><img src="<?= $image->get_file_name(); ?>" alt="" class="img-fluid"></div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-12 bg-dark pt-5" style="color:antiquewhite;">
            <p class="newarrival text-center">Nouveau</p>
            <h2><?= $article->get_name(); ?></h2>
            <p><?= $article->get_description(); ?></p>
            <p class="prix" style="color: cornsilk;"><?= $article->get_price_vat(); ?>€</p>
            <hr>
            <div class="py-3">
                <?php
                if ($article->get_stock() == "0") {
                    echo "<p><b>Disponibilité : </b>Indisponnible</p>
                              <p><b>Quantité : </b>0</p>";
                } else {
                    echo "<p><b>Disponibilité : </b>En stock</p>
                              <p><b>Quantité : </b>" . $article->get_stock() . "</p>";
                }
                ?>
            </div>
            <hr>
            <button class="btn btn-outline-warning my-3" type="submit">Ajouter au panier</button>
            <p>
            </p>
        </div>
    </div>
</div>
<?php

require "footer.php";

?>