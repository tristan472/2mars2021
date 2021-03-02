<?php
require "header.php";
?>
    <div class="container-fluid position-relative px-0 bordure-bas">
        <img src="../Assets/Pictures/banniere-velo-electrique.png" class="img-fluid">
        <div class="row position-absolute milieu">
            <h1 class="text-white titre">Dendo Jitensha</h1>
        </div>
    </div>
<?php
$catégories = new ManagerCategory();
$cat = $catégories->getLimitedAmount(4);
foreach ($cat as $key => $catname):?>
    <div class="py-5 <?php if ($key % 2 == 0) {
        print_r("bg-dark");
    } ?>">
        <div class="container">
            <div class="text-center">
                <a href="rayon.php?categoryId=<?= $catname->get_id(); ?>">
                    <h2 class="<?php if ($key % 2 == 0) {
                        print_r("text-white");
                    } ?>"><?= $catname->get_name(); ?></h2>
                </a>
            </div>
            <div class="row">
                <?php
                $managerProduct = new ManagerProduct();
                $managerImage = new ManagerPicture();
                $products = $managerProduct->getProductByCategorie($catname->get_id(), 3);
                foreach ($products as $product): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card mt-5 border border-warning mx-auto" style="width: 18rem;">
                            <img class="card-img-top" src="<?php $image = $managerImage->getProductPicture($product->get_id()); echo $image[0]->get_file_name();?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?= $product->get_name(); ?></h5>
                                <p class="card-text"><?= $product->get_price_vat(); ?>€</p>
                                <a href="produit.php?productId=<?= $product->get_id(); ?>"
                                   class="btn btn-outline-warning">Acheter</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php
require "footer.php";
?>