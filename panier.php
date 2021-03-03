<?php
require "header.php";
?>

<body class="bg-dark">
    <div class="container">
        <h1 class="text-center text-title pt-5">Panier d'achat</h1>
        <!--
        <div class="alerteRienEstSéléctionné">
                <h2 class="alerteRienEstSéléctionné">Mais espèce de fils de pute séléctionne un truc pd h24 tu casse les couilles personne ne t'aime rend toi service suicide toi petite salope</h2>
            </div>
        -->  

        <div class="row">
            <div class="col-md-9">
                <div class="d-block">
                    <div class="border d-flex flex-wrap mb-md-3 mb-5">
                        <img class="img-fluid item-image-panier" src="../Assets/Pictures/item1.png">
                        <div class="info-item-panier pl-2">
                            <h3 class="text-light">Nom de l'objet</h3>
                            <p class="text-light">quantité demandé : 2</p>
                        </div>
                    </div>
                    <div class="border d-flex flex-wrap mb-md-3 mb-5">
                        <img class="img-fluid item-image-panier" src="../Assets/Pictures/item1.png">
                        <div class="info-item-panier pl-2">
                            <h3 class="text-light">Nom de l'objet</h3>
                            <p class="text-light">quantité demandé : 2</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="border">
                    <div class="text-light w-100 py-3 text-center">Nombre d'aticle : 2</div>
                    <div class="text-light w-100 py-3 text-center">Total panier : 150€</div>
                    <a href="#" class="btn btn-outline-warning m-3 d-flex justify-content-center text-decoration-none">Payer</a>
                </div>
            </div>
        </div>
    </div>
</body>


<?php
require "footer.php";
?>
