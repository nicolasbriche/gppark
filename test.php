<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png">

    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <title>GP Park</title>
</head>


<body>
    <form action="createDischarge.php" method="post">
        <label for="lastName">Nom</label>
        <input type="text" name="lastName" required>
        <br>
        <label for="firstName">Prénom</label>
        <input type="text" name="firstName" required>
        <br>
        <label for="dateOfBirth">Date de naissance</label>
        <input type="text" name="dateOfBirth" required>
        <br>
        <label for="address">Adresse</label>
        <input type="text" name="address" required>
        <br>
        <label for="zipCode">Code Postale</label>
        <input type="text" name="zipCode" required>
        <br>
        <label for="city">Ville</label>
        <input type="text" name="city" required>
        <br>
        <label for="emergencyPhone">Téléphone en cas d'urgence</label>
        <input type="text" name="emergencyPhone" required>
        <br>
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>