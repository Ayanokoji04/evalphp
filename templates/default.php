<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une Tâche</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <h1>Bienvenue sur notre blog !</h1>
    <!-- ca s'afficheraseulement si la prsn est connecté -->
    <?php if (isset($_SESSION['user'])): ?>
        <p>Bonjour, <?php echo $_SESSION['user']['firstname']; ?> !</p>
        <a href="/profile">Mon profil</a> |
        <a href="/logout">Se déconnecter</a>
    <?php else: ?>
        <p>Vous devez être connecté pour accéder à votre profil et aux blogs.</p>
        <a href="/inscription">S'inscrire</a> |
        <a href="/connexion">Se connecter</a>
    <?php endif; ?>
    <div class="container">
        <?= $data['content'] ?>
    </div>
</body>

</html>

<!-- ne fonctionne pas -->