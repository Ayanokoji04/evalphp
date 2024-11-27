<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);  
    $pdo = new PDO('mysql:host=localhost;dbname=evalphp', 'root', '');
    $stmt = $pdo->prepare("INSERT INTO users (email, firstname, lastname, password, id_roles) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$email, $firstname, $lastname, $password, 2]);

    header('location : /connexion');

}
render('inscription');
?>