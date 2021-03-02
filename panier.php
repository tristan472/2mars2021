<?php
require "header.php";
?>

<body class="bg-dark">
    <div class="container">
        <h1 class="text-center text-title pt-5">Panier d'achat</h1>

        <div class="row">
            <div class="col-md-9">
                <div class="d-block">
                    <div class="border d-flex flex-wrap mb-md-3 mb-5">
                        <img class="img-fluid item-image-panier" src="../Assets/Pictures/item1.png">
                        <div class="info-item-panier pl-2">
                            <h3>Nom de l'objet</h3>
                            <p>quantité demandé : 2</p>
                        </div>
                    </div>
                    <div class="border d-flex flex-wrap mb-md-3 mb-5">
                        <img class="img-fluid item-image-panier" src="../Assets/Pictures/item1.png">
                        <div class="info-item-panier pl-2">
                            <h3>Nom de l'objet</h3>
                            <p>quantité demandé : 2</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="border">
                    <div class="w-100 py-3 text-center">Nombre d'aticle : 2</div>
                    <div class="w-100 py-3 text-center">Total panier : 150€</div>
                    <a href="#" class="btn btn-outline-warning m-3 d-flex justify-content-center text-decoration-none">Payer</a>
                </div>
            </div>
        </div>
    </div>
</body>


<?php
require "footer.php";
?>
