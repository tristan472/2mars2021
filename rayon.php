<?php

require "header.php";

?>

<?php

if (isset($_GET["categoryId"]) && $_GET["categoryId"] > 0) {
    $managerCategory = new ManagerCategory();
    $managerProduct = new ManagerProduct();
    $managerImage = new ManagerPicture();
    $category = $managerCategory->getById($_GET["categoryId"]);
    $products = $managerProduct->getProductByCategorie($_GET["categoryId"]);
} else {
    header("404.php");
}

?>
<div class="bg-dark pt-5">
    <div class="container">
        <div class="text-center">
            <h2 class="text-white">
                <?= $category->get_name(); ?>
            </h2>
        </div>
        <div class="row">
            <?php
            foreach ($products as $product):
                ?>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="card mt-5 border border-warning mx-auto" style="width: 18rem;">
                        <img class="card-img-top"
                             src="<?php $image = $managerImage->getProductPicture($product->get_id());
                             print_r($image[array_rand($image)]->get_path()); ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product->get_name(); ?></h5>
                            <p class="card-text"><?= $product->get_price_ttc(); ?>€</p>
                            <a href="produit.php?productId=<?= $product->get_id(); ?>"
                               class="btn btn-primary-o">Acheter</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php

require "footer.php";

?>
