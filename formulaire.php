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
            <form>
                <h1>Idée d'histoire</h1>
                <!--Conteneur du formulaire-->
                <!--categorie de l'idée-->
                <div id="categorie">
                    <label for="categorie">Catégorie</label><br>
                    <input type="text" name="categorie" id="categorie" placeholder="Indiquez la categorie" required><br>
                </div>
                <!--description de l'idée-->
                <div id="desciption">
                    <label for="description">Description</label><br>
                    <textarea id="description" name="description" placeholder="Indiquez la description" rows="6" required></textarea><br>
                </div>
                <!--nombre de personnage-->
                <div id="nb_perso">
                    <label for="nb_perso">Nombre de personnage</label><br>
                    <select id="nb_perso" required>
                        <option value="" selected>Saisir le nombre de personnage</option>
                        <option value="valeur1">1 personnage</option>
                        <option value="valeur2">2 personnages</option>
                        <option value="valeur3">3 personnages</option>
                        <option value="valeur4">4 personnages</option>
                        <option value="valeur5">5 personnages</option>
                        <option value="valeur6">6 personnages</option>
                        <option value="valeur7">7 personnages</option>
                        <option value="valeur8">8 personnages</option>
                        <option value="valeur9">9 personnages</option>
                        <option value="valeur10">10 personnages</option>
                    </select><br>
                </div>
                <!--bouton d'envoie du formulaire-->
                <div id="bouton" class="bouton">
                    <input type="submit" value="Valider">
                </div>
            </form>
        </div>
    </body>
</html>