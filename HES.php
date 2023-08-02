<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3600">
    <title>Titres sur le cadre du fieldset</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: whitesmoke;
        }

        fieldset {
            border: 2px solid #CE1126;
            padding: 20px;
            max-width: 95%;
            margin: 50px auto;
            height: 80vh;
            margin-bottom: 0;
            /* 6/7 de la hauteur de la page */
        }

        legend {
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 28px;
            font-weight: bold;
            margin: 0;
            color: #CE1126;
        }

        h2 {
            font-size: 25px;
            font-style: italic;
            color: black;
            margin: 0;
        }

        h3 {

            font-style: italic;
            margin-top: 0;

        }

        .num {
            font-size: 30px;
            margin: 0;
            border: solid 1px #CE1126;
            border-radius: 10px;
            padding: 10px;
            background-color: #CE1126;
            color: white;
        }

        .container {
            display: flex;
            flex-direction: column;
            /* Les éléments enfants seront disposés en colonne */
            border-radius: 5px;
            height: 90%;
        }

        .partie1 {
            flex: 2;
            /* Prend 2/5 de l'espace disponible */
            display: flex;
            /* Utilise la flexbox pour diviser horizontalement */
        }

        .partie1>div {
            flex: 1;
            /* Les deux sous-parties prendront chacune la moitié de l'espace disponible */
            border-radius: 40px;
            padding: 5px;
            /* Ajoute un peu d'espace intérieur aux sous-parties */
            margin: 10px;
            display: flex;
            /* Utilise la flexbox pour aligner les éléments horizontalement */
            align-items: center;
            /* Centre les éléments verticalement */
            justify-content: center;
            /* Centre le texte horizontalement */
            text-align: center;
            background-color: #EAE9F4;
        }

        .partie2 {
            flex: 3;
            /* Prend 3/5 de l'espace disponible */
            display: flex;
            /* Utilise la flexbox pour diviser horizontalement */
        }

        .partie2>div {
            flex: 1;
            /* Les quatre sous-parties prendront chacune 1/4 de l'espace disponible */
            border-radius: 40px;
            padding: 5px;
            /* Ajoute un peu d'espace intérieur aux sous-parties */
            margin: 10px;
            display: flex;
            /* Utilise la flexbox pour aligner les éléments horizontalement */
            align-items: center;
            /* Centre les éléments verticalement */
            justify-content: center;
            /* Centre le texte horizontalement */
            text-align: center;
            background-color: #EAE9F4;
        }


        .title {
            font-size: 40px;
        }


        /* Nouveau style pour les logos */
        .logos-container {
            display: flex;
            justify-content: space-between;
            /* Espace équitablement les logos */
            margin-top: 0px;
            /* Espacement par rapport au fieldset */
            height: 10vh;
            /* 1/7 de la hauteur de la page */
        }

        .logo {
            width: 30%;
            /* Prend 30% de l'espace disponible */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .partie2 .icon img,
        .partie1 .icon img {
            width:25%;
        }

        .logo img{
            max-width: 50%;
            /* Assurez-vous que l'image ne dépasse pas la taille du conteneur */
            height: auto;
            /* Garantit que l'aspect ratio de l'image est préservé */
        }

        
    </style>
</head>

<body>
    <fieldset>
        <legend>
            <h1 class="title">RFM Objectif EHS & Durabilité</h1>
            <h2>Sustainability & EHS Goal</h2>
        </legend>

        <div class="container">
            <div class="partie1">
                <div>
                    <div >
                        <span class="icon"><img src="./icons/1.png"></span>
                        <h1> Nbr de personnes sur site</h1> <!-- Titre -->
                        <h3>People on Site</h3> <!-- Sous-titre -->
                        <p class="num"><?php echo get_data_from_table('NbrPrsn'); ?></p> <!-- Affichage des données -->
                    </div>
                </div>
                <div>
                    <!-- Contenu de la deuxième sous-partie (1/2 de la première partie) -->
                    <div>
                        <span class="icon"><img src="./icons/2.png"></span> 
                        <h1>Nbr de Jour sans Accident</h1> <!-- Titre -->
                        <h3>Nuber of Day since Lasst Incident</h3> <!-- Sous-titre -->
                        <p class="num"><?php echo get_data_from_table('NbrJsA'); ?></p> <!-- Affichage des données -->
                    </div>
                </div>
            </div>
            <div class="partie2">
                <div>
                    <!-- Contenu de la première sous-partie (1/4 de la deuxième partie) -->
                    <div>
                        <span class="icon"><img src="./icons/3.png"></span>
                        <h1>Gaz effet de serre TCO2</h1> <!-- Titre -->
                        <h3>GHG Emissions TCO2</h3> <!-- Sous-titre -->
                        <p>YTD&nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp;PLAN</p>
                        <p class="num"><?php echo get_data_from_table('GazYTD'); ?> &nbsp;|&nbsp; <?php echo get_data_from_table('GazPLAN'); ?></p> <!-- Affichage des données -->
                    </div>
                </div>
                <div>
                    <!-- Contenu de la deuxième sous-partie (1/4 de la deuxième partie) -->
                    <div>
                        <span class="icon"><img src="./icons/4.png"></span>
                        <h1> Conso. Eléctrique Mwh</h1> <!-- Titre -->
                        <h3>Energy Consumption Mwh</h3> <!-- Sous-titre -->
                        <p>YTD&nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp;PLAN</p>
                        <p class="num"><?php echo get_data_from_table('ConsoElecYTD'); ?> | <?php echo get_data_from_table('ConsoElecPLAN'); ?></p> <!-- Affichage des données -->
                    </div>
                </div>
                <div>
                    <!-- Contenu de la troisième sous-partie (1/4 de la deuxième partie) -->
                    <div>
                        <span class="icon"><img src="./icons/5.png"></span>
                        <h1> Consommation Eau m3</h1> <!-- Titre -->
                        <h3>Water Consumption m3</h3> <!-- Sous-titre -->
                        <p>YTD&nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp;PLAN</p>
                        <p class="num"><?php echo get_data_from_table('ConsoEauYTD'); ?> | <?php echo get_data_from_table('ConsoEauPLAN'); ?></p> <!-- Affichage des données -->
                    </div>
                </div>
                <div>
                    <!-- Contenu de la quatrième sous-partie (1/4 de la deuxième partie) -->
                    <div>
                        <span class="icon"><img src="./icons/6.png"></span>
                        <h1>Taux Recyclage Dêchets %</h1> <!-- Titre -->
                        <h3>Rate Waste to Landfill %</h3> <!-- Sous-titre -->
                        <p>YTD&nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp;PLAN</p>
                        <p class="num"><?php echo get_data_from_table('RecyclYTD'); ?> | <?php echo get_data_from_table('RecyclPLAN'); ?></p> <!-- Affichage des données -->
                    </div>
                </div>
            </div>
        </div>
    </fieldset>

    <!-- Nouveau conteneur pour les logos -->
    <div class="logos-container">
        <div class="logo">
            <img src="./icons/logo1.png" alt="Logo 1">
        </div>
        <div class="logo">
            <img src="./icons/logo2.jpg" alt="Logo 2">
        </div>
        <div class="logo">
            <img src="./icons/logo3.jpg" alt="Logo 3">
        </div>
    </div>
</body>

</html>

<?php
function update_data_in_table($column_name, $new_value)
{
    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hes";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Connexion échouée : " . $conn->connect_error);
    }

    // Préparer la requête pour mettre à jour la dernière ligne dans la table hes
    $stmt = $conn->prepare("UPDATE hes SET $column_name = ?, DateAjout = NOW() ORDER BY DateAjout DESC LIMIT 1");

    // Lier la nouvelle valeur au paramètre dans la requête
    $stmt->bind_param("s", $new_value);

    // Exécuter la requête
    if ($stmt->execute()) {
        // Nouvelle valeur mise à jour avec succès
        return true;
    } else {
        // Erreur lors de la mise à jour
        return false;
    }

    // Fermer la connexion à la base de données
    $conn->close();
}
?>

<?php
function get_data_from_table($column_name)
{
    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hes";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Connexion échouée : " . $conn->connect_error);
    }

    if ($column_name === 'NbrJsA') {
        // Requête pour récupérer la dernière ligne ajoutée à la table hes
        $sql = "SELECT $column_name, DateAjout FROM hes ORDER BY DateAjout DESC LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $nbrJsA = $row[$column_name];
            $dateAjout = $row['DateAjout'];

            // Calculer le nombre de jours entre la date d'ajout et aujourd'hui
            $dateAjout = new DateTime($dateAjout);
            $aujourdhui = new DateTime();
            $interval = $dateAjout->diff($aujourdhui);
            $joursEcoulés = $interval->days;

            // Ajouter le nombre de jours à la valeur de 'NbrJsA'
            $nbrJsA += $joursEcoulés;

            // Enregistrer la nouvelle valeur de 'NbrJsA' dans la dernière ligne de la table 'hes'
            if (update_data_in_table($column_name, $nbrJsA)) {
                // Retourne la nouvelle valeur mise à jour
                return $nbrJsA;
            } else {
                // Erreur lors de la mise à jour de la nouvelle valeur
                return "Erreur lors de la mise à jour de la nouvelle valeur";
            }
        }
    } else {
        // Requête pour récupérer la dernière ligne ajoutée à la table hes
        $sql = "SELECT $column_name FROM hes ORDER BY DateAjout DESC LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row[$column_name];
        }
    }

    return "Aucune donnée trouvée"; // Renvoie un message si aucune donnée trouvée

    // Fermer la connexion à la base de données
    $conn->close();
}
?>



