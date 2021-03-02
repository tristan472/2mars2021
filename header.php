<?php
function addClass($class)
{
    if (preg_match('/Manager/', $class)) {
        require "../Manager/" . $class . ".php";
    } else if (preg_match('/Model/', $class)) {
        require "../Models/" . $class . ".php";
    } else if (preg_match('/Interface/', $class)) {
        require "../Interface/" . $class . ".php";
    }
}

spl_autoload_register('addClass');

ManagerUser::testIfConnected();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Dendo</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../Style/slick/slick.css">
    <link rel="stylesheet" href="../Style/slick/slick-theme.css">
    <link rel="stylesheet" href="../Style/fontawesome-free-5.15.0-web/css/all.css">
    <link rel="stylesheet" href="../Style/bootstrap-4.5.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../Style/bootstrap-4.5.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Style/style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-sm navbar-light bg-secondary bordure-bas">
        <ul class="navbar-nav mr-auto">
            <a class="nav-link" href="index.php"><img src="../Assets/Pictures/Logo-DJ.png" class="img-fluid">
                <span class="sr-only">(current)</span>
            </a>
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <?php
                if (isset($_SESSION) && !empty($_SESSION)):
                    ?>
                    <li class="nav-item">
                        <a class="navbar-brand" href="modifyProfil.php"><?= $_SESSION['first_name']." ".$_SESSION['last_name'] ?></a>
                    </li>
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrateur</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="nav-link" href="gestionUser.php">Admin</a>
                                <a class="nav-link" href="ajouterProduit.php">Ajouter un produit</a>
                            </div>
                    </div>
        <!-- 

            Si jamais la liste ne marche pas 

                    <li class="nav-item">
                        <a class="nav-link" href="gestionUser.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="propositionProduit.php">Mettre en vente</a>
                    </li>
                    <li class="nav-item">
        -->                
                        <a class="nav-link" href="logout.php">Déconnexion</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="navbar-brand" href="index.php">Dendo Jitensha</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="panier.php">Panier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inscription.php">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="connexion.php">Connexion</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>

