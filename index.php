<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do Liste</title>
</head>
<body>

<?php
session_start();                                                        # Démarre une SESSION.

if (!isset($_SESSION["sauvegarde"])){                                   # Vérifie si la SESSION "sauvegarde" existe.

    $_SESSION["sauvegarde"] = array();                                  # Assois la SESSION "sauvegarde" à un tableau.
}


if (isset($_POST["tache"])){                                            # Vérifie que le formulaire a bien été créé.
    
    array_push($_SESSION["sauvegarde"], $_POST["tache"]);               # Ajoute la tache que l'utilisateur a créée au tableau.
}


foreach ($_SESSION["sauvegarde"] as $ok){                               # Créer une boucle à partir de la session et l'affecte à une nouvelle variable "ok".
    
    echo $ok."<br>";                                                    # Affiche la variable "ok" qui contient la/les taches de l'utilisateur.
}




?>

    <form action=" " method="POST"> 
        Créer une tache: <input type="text" name="tache">
        <input type="submit" value="Créer">
    </from>


</body>
</html>