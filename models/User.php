<?php

class UserModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=forums', 'root', ''); 
    }

    // pour créé nouvel utilisateur

    public function createUser($email, $firstname, $lastname, $password) {
        $stmt = $this->db->prepare('INSERT INTO users (email, firstname, lastname, password, id_roles) VALUES (?, ?, ?, ?, 2)');
        $stmt->execute([$email, $firstname, $lastname, $password]);
    }

    
    public function getUserByEmail($email) {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE email = ?');
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
    public function getUserById($id) {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
    public function updateUser($id, $firstname, $lastname, $email) {
        $stmt = $this->db->prepare('UPDATE users SET firstname = ?, lastname = ?, email = ? WHERE id = ?');
        $stmt->execute([$firstname, $lastname, $email, $id]);
    }

    // pour supprimer un utilisateurs

    public function deleteUser($id) {
        $stmt = $this->db->prepare('DELETE FROM users WHERE id = ?');
        $stmt->execute([$id]);
    }
}
