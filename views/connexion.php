<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form method="POST" action="connexionCtrl.php">
        <label for="email">Email</label>
        <input type="email" name="email" required><br>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" required><br>
        <button type="submit">Se connecter</button>
    </form>

    <p>Pas encore de compte ? <a href="/inscription">Inscrivez-vous ici</a></p>

    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
</body>
</html>
