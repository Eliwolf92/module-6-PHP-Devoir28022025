<?php
require_once "../Modele/Etudiant.php";

class EtudiantController {
    // http://192.168.33.10/Devoir_28022025/FichierPrincipal/index.php

    public function afficherEtudiant() {
        // Variable pour un seul étudiant (si l'ID est fourni dans l'URL)
        $etudiant = null;
        // Récupérer tous les étudiants
        $etudiants = (new Etudiant())->getAllEtudiants();

        // Vérifier si un ID est passé dans l'URL pour afficher un seul étudiant
        if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
            $id = intval($_GET["id"]);
            $model = new Etudiant();
            $etudiant = $model->getEtudiantById($id);  // Récupérer l'étudiant par ID
        }

        // Inclure la vue avec les étudiants
        include "../Vue/etudiant.php";
    }
}

// Créer et appeler le contrôleur
$controller = new EtudiantController();
$controller->afficherEtudiant();
