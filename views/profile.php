<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil de <?php echo $user['firstname']; ?></title>
</head>
<body>
    <h1>Bienvenue, <?php echo $user['firstname']; ?> !</h1>
    <p>Email : <?php echo $user['email']; ?></p>
    <p>Nom : <?php echo $user['lastname']; ?></p>

    <a href="/modif">Modifier le profil</a><br>
    <a href="/deco">Déconnexion</a>
</body>
</html>
