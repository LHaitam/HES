<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
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
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
            text-align: left;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #CE1126;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            align-items: center;
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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données depuis le formulaire
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Connexion à la base de données
        $servername = "localhost";
        $db_username = "root";
        $db_password = "";
        $dbname = "hes";

        $conn = new mysqli($servername, $db_username, $db_password, $dbname);

        // Vérifier la connexion
        if ($conn->connect_error) {
            die("Connexion échouée : " . $conn->connect_error);
        }

        // Requête pour vérifier les informations d'identification dans la table users
        $sql = "SELECT * FROM users WHERE login='$username' AND password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // L'utilisateur est authentifié avec succès, démarre une session
            session_start();
            $_SESSION['username'] = $username;

            // Redirige vers la page de l'administrateur (admin.php)
            header("Location: admin.php");
            exit();
        } else {
            // Affiche un message d'erreur si les informations d'identification sont incorrectes
            echo "<p style='color: red;'>Identifiant ou mot de passe incorrect.</p>";
        }

        // Fermer la connexion à la base de données
        $conn->close();
    }
    ?>
    
    <img class="logo" src="./icons/logo1.png" alt="Logo">

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <h2>Connexion</h2>
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" id="username" required>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" required>

        <input type="submit" value="Se connecter">
    </form>
</body>

</html>
