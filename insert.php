<?php
    //connexion à la database
    $user="Phuong";
    $pass="Ph@ntomhive";

    //variable message
    $mes="";

    try{
        $objectPDO = new PDO('mysql:host=localhost;dbname=Histoire',$user, $pass);

        //requête
        $request=$objectPDO->prepare('INSERT INTO Idee(categorie, description, nb_perso, date_idee) VALUES (:categorie, :description, :nb_perso, :date)');

        //liaison des valeur
        $request->bindValue(':categorie', $_POST['categorie'], PDO::PARAM_STR);
        $request->bindValue(':desription', $_POST['description'], PDO::PARAM_STR);
        $request->bindValue('nb_perso', $_POST['nb_perso'], PDO::PARAM_STR);
        $request->bindValue('date_idee', date("Y-m-d"));

        //exécution de la requête
        $insertValid = $request->execute();

        if($insertValid)
        {
            $mes = 'Cette histoire à déjà été validé.';
        }
        else
        {
            $mes = 'L\'envoie de l\'histoire à échoué.';
        }
    }
    catch (PDOException $e)
    {
        print "Erreur : ".$e->getMessage()."<br/>";
        die;
    }
?>

<!-- La page qui s'affiche une fois qu'on a validé le formulaire -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="style_insert.css" rel="stylesheet" type="text/css">
    <title>Validation du formulaire</title>
</head>
<body>
    <div id="affichage">
        <!-- Affiche le message de reussite ou echec -->
        <h1>Confirmation du formulaire</h1>
        <!-- Affichage des messages appelés -->
        <p><?php echo $mes ?> <br> </p>
        <!-- Bouton qui retourne vers la page du formulaire -->
        <div id="bouton" class="bouton">
                <a href="menu.php" >
                    <button>Retour</button>
                </a>
        </div>
    </div>
</body>
</html>