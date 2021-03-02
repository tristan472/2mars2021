<?php
require "header.php";
?>
<body class="bg-dark">
    <h1 class="text-center text-title pt-5">Gestion droit d'administration</h1>
<div class="row formulaireInscription col-11 col-md-7 col-sm-7 margin-ci" id="d1">
    <div class="col-12 text-left text-danger">
        <div class="col-12 margin-npadmin">
            <form action="" method="post" class="text-center">
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>
                        <th>Administrateur</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Identifiant</th>
                    </tr>
                    </thead>
                    <tbody id="corp">
                    <tr>
                        <td><input type="checkbox" name="cb" value="true" checked></td>
                        <td>Machine</td>
                        <td>Jordan</td>
                        <td>machine.Jordan@hotmail.fr</td>
                        <td>MrJordan</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="cb" value="false" unchecked></td>
                        <td>Rude</td>
                        <td>Pente</td>
                        <td>Rude.Pente@gmail.com</td>
                        <td>MmeRude</td>
                    </tr>
                    </tbody>
                </table>
                </br>
                <button class="btn btn-outline-warning my-2 my-sm-0 margin-button" type="submit">Ajouter</button>
            </form>
        </div>
    </div>
</div>
</body>


<?php
require "footer.php";
?>
