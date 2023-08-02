<?php
// Démarrer une session
session_start();

// Vérifier si l'utilisateur est connecté (a démarré une session)
if (!isset($_SESSION['username'])) {
    // L'utilisateur n'est pas connecté, rediriger vers la page de connexion
    header("Location: login.php");
    exit(); // Assurez-vous d'arrêter l'exécution du code après la redirection
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à jour des données HES</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 500px;
            margin: 30px auto;
            padding: 20px;
            border-radius: 10px;
            text-align:center;
        }



        label {
            display: block;
            margin-bottom: 10px;
            text-align:left;
        }

        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid ;
            border-radius: 5px;
            margin-bottom : 10px;
        }

        input[type="submit"] {
            background-color: #CE1126;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            align-items:center
        }

        .logo {
            display: block;
            margin: 50px auto;
            
            max-width: 200px;
        }
    </style>
</head>

<body>
<?php
    // Vérifier si le formulaire a été soumis
    if (isset($_POST['submit'])) {
        // Récupérer les données depuis le formulaire
        $NbrPrsn = $_POST['nbrPrsn'];
        $NbrJsA = $_POST['nbrJsA'];
        $GazYTD = $_POST['gazYTD'];
        $GazPLAN = $_POST['gazPLAN'];
        $ConsoElecYTD = $_POST['consoElecYTD'];
        $ConsoElecPLAN = $_POST['consoElecPLAN'];
        $ConsoEauYTD = $_POST['consoEauYTD'];
        $ConsoEauPLAN = $_POST['consoEauPLAN'];
        $RecyclYTD = $_POST['recyclYTD'];
        $RecyclPLAN = $_POST['recyclPLAN'];

        // Obtenir la date d'ajout au format AAAA-MM-JJ
        $dateAjout = date("Y-m-d H:i:s");

        // Connexion à la base de données SQL Server
        $serverName = "DESKTOP-AT05QHN\SQLEXPRESSt";
        $connectionOptions = array(
            "Database" => "hes",
            "Uid" => "sa", // Remplacez par votre nom d'utilisateur SQL Server
            "PWD" => "" // Remplacez par votre mot de passe SQL Server
        );

        $conn = sqlsrv_connect($serverName, $connectionOptions);

        // Vérifier la connexion
        if (!$conn) {
            die(print_r(sqlsrv_errors(), true));
        }

        // Requête pour insérer les données avec la date d'ajout
        $sql = "INSERT INTO hes (NbrPrsn, NbrJsA, GazYTD, GazPLAN, ConsoElecYTD, ConsoElecPLAN, ConsoEauYTD, ConsoEauPLAN, RecyclYTD, RecyclPLAN, DateAjout) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $params = array($NbrPrsn, $NbrJsA, $GazYTD, $GazPLAN, $ConsoElecYTD, $ConsoElecPLAN, $ConsoEauYTD, $ConsoEauPLAN, $RecyclYTD, $RecyclPLAN, $dateAjout);
        $stmt = sqlsrv_query($conn, $sql, $params);

        // Vérifier si l'insertion a réussi
        if ($stmt) {
            echo "Enregistrement effectué avec succès.";
        } else {
            echo "Erreur lors de l'enregistrement : " . print_r(sqlsrv_errors(), true);
        }

        // Fermer la connexion à la base de données
        sqlsrv_close($conn);
    }
    ?>

    <img class="logo" src="./icons/logo1.png" alt="Logo">

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <h2>Mise à jour des données HES</h2>
        <label for="nbrPrsn">Nombre de personnes sur site :</label>
        <input type="number" name="nbrPrsn" id="nbrPrsn" required>

        <label for="nbrJsA">Nbr de Jour sans Accident :</label>
        <input type="number" name="nbrJsA" id="nbrJsA" required>

        <label for="gazYTD">Gaz effet de serre YTD :</label>
        <input type="number" name="gazYTD" id="gazYTD" required>

        <label for="gazPLAN">Gaz effet de serre PLAN :</label>
        <input type="number" name="gazPLAN" id="gazPLAN" required>

        <label for="consoElecYTD">Consommation électrique YTD :</label>
        <input type="number" name="consoElecYTD" id="consoElecYTD" required>

        <label for="consoElecPLAN">Consommation électrique PLAN :</label>
        <input type="number" name="consoElecPLAN" id="consoElecPLAN" required>

        <label for="consoEauYTD">Consommation d'eau YTD :</label>
        <input type="number" name="consoEauYTD" id="consoEauYTD" required>

        <label for="consoEauPLAN">Consommation d'eau PLAN :</label>
        <input type="number" name="consoEauPLAN" id="consoEauPLAN" required>

        <label for="recyclYTD">Taux de recyclage YTD :</label>
        <input type="number" name="recyclYTD" id="recyclYTD" required>

        <label for="recyclPLAN">Taux de recyclage PLAN :</label>
        <input type="number" name="recyclPLAN" id="recyclPLAN" required>

        <input type="submit" name="submit" value="Mettre à jour">
    </form>
</body>

</html>
