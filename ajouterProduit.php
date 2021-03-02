<?php
require "header.php";

if (isset($_POST, $_FILES) && !empty($_POST) && !empty($_FILES)){
    $product = new ProductModels([
        'price_ttc' => (float)$_POST["Prix"],
        'price_vat' => (float)$_POST["Prix"] * 0.80,
        'name' => $_POST["Nom"],
        'description' => $_POST["Description"],
        'stock' => (int)$_POST["Stock"],
        'category_id' => (int)$_POST["Catégorie"],
        'status_id' => 1
    ]);

    $managerProduct = new ManagerProduct();
    $managerPicture = new ManagerPicture();
    $idProduit = $managerProduct->insertAndGetId($product);

    $uploadDir = "../Assets/Pictures/";
    $uploadFile = $uploadDir.basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $uploadFile);

    $image = new PictureModels([
        'file_name' => $uploadFile,
        'product_id' => $idProduit
    ]);

    $managerPicture->insert($image);

    header("Location: index.php");
}
?>

<div class="bg-dark py-5">
    <div class="container">
        <div class="éditerProfile">
            <div class="éditerProfileTitre"><h2 class="text-center">Ajouter un produit</h2></div>
            <div class="row donnéesPersonnelles">
                <form class="w-100" role="form" action="modifyProfil.php" method="post">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="control-label">Prix :</label>
                            <input class="form-control" type="text" name="" value="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="control-label">Nom :</label>
                            <input class="form-control" type="text" name="" value="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="control-label">Description :</label>
                            <input class="form-control" type="text" name="" value="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="control-label">Quantité :</label>
                            <input class="form-control" type="number" name="" value="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="control-label">Catégorie :</label>
                            <select class="entree margin-button" id="Catégorie" name="Catégorie">
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="control-label">Image :</label>
                            <input type="file">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="submit" class="btn btn-outline-warning my-2 my-sm-0 margin-button" value="Enregister">
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
