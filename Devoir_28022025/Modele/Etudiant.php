<?php

class Etudiant {
    private $pdo;

    public function __construct() {
        $host = "localhost";
        $dbname = "data"; 
        $username = "root"; 
        $password = "root"; 

        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }

    public function getEtudiantById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM Etudiant WHERE id_etudiant = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Ajout de la méthode pour récupérer tous les étudiants
    public function getAllEtudiants() {
        $stmt = $this->pdo->query("SELECT * FROM Etudiant");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);  // Retourne un tableau associatif de tous les étudiants
    }
}
