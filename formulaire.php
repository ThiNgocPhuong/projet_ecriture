<!--
    SAM Caroline 09/12/2022
    Formulaire de saisie 
    HTML/PHP 
-->

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="formulaire_style.css" rel="stylesheet" type="text/css">
        <title>Formulaire</title>
    </head>
    <body>
        <div id="conteneur">
            <form action="./insert.php" method="post" enctype="multipart/form-data">
                <h1>Idée d'histoire</h1>
                <!--Conteneur du formulaire-->
                <!--categorie de l'idée-->
                <div id="categorie">
                    <label for="categorie">Catégorie</label><br>
                    <input type="text" name="categorie" id="categorie" placeholder="Indiquez la categorie" required><br>
                </div>
                <!--description de l'idée-->
                <div id="desciption">
                    <label for="description">Description</label><br><br>
                    <textarea id="description" name="description" placeholder="Indiquez la description" rows="7" required></textarea><br>
                </div>
                <!--nombre de personnage-->
                <div id="nb_perso">
                    <label for="nb_perso">Nombre de personnage</label><br><br>
                    <input type="text" name="nb_perso" placeholder="Indiquez le nombre de personnage"><br>
                </div>
                <!--bouton d'envoie du formulaire-->
                <div id="bouton" class="bouton">
                    <input type="submit" value="Valider">
                </div>
            </form>
        </div>
    </body>
</html>