<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form method="POST" action="inscriptionCtrl.php">
        <label for="email">Email</label>
        <input type="email" name="email" required><br>

        <label for="firstname">Prénom</label>
        <input type="text" name="firstname" required><br>

        <label for="lastname">Nom</label>
        <input type="text" name="lastname" required><br>

        <label for="password">Mot de passe</label>
        <input type="password" name="password" required><br>

        <button type="submit">S'inscrire</button>
    </form>

    <p>Déjà un compte ? <a href="/connexion">Connectez-vous ici</a></p>
</body>
</html>
