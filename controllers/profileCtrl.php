<?php session_start();?>

<?php  
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$pdo = new PDO('mysql:host=localhost;dbname=evalphp', 'root', '');
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();

// pur afficher profil
if ($user) {
   
    include('profileView.php');
}
render('profile');
?>
