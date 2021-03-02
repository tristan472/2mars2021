<?php
require "header.php";
?>

<div class="bg-dark">
    <div class="container">
        <h1 class="text-center text-title pt-5">Produit en attente</h1>
        <div class="d-flex">
            <div class="d-block w-100">
                <div class="border d-flex flex-wrap mb-md-3 mb-5">
                    <img class="img-fluid item-image-panier" src="../Assets/Pictures/item1.png">
                    <div class="info-item-panier pl-2">
                        <p>Nom de l'objet</p>
                        <p>Prix : 120€</p>
                        <p>Description Test</p>
                        <div class="text-center text-md-right">
                            <a class="mx-md-3 mx-2">Modifier</a>
                            <a class="mx-md-3 mx-2">Supprimer</a>
                            <a class="mx-md-3 mx-2">Accepter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require "footer.php";
?>
