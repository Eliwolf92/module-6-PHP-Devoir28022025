<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Étudiants</title>
</head>
<body>
    <h2>Liste des étudiants</h2>
    


<?php if (isset($etudiant) && $etudiant): ?>
    <h2>Informations de l'étudiant</h2>
    <p><strong>ID :</strong> <?= htmlspecialchars($etudiant["id_etudiant"] ?? "N/A") ?></p>
    <p><strong>Nom :</strong> <?= htmlspecialchars($etudiant["nom"] ?? "N/A") ?></p>
    <p><strong>Prénom :</strong> <?= htmlspecialchars($etudiant["prenom"] ?? "N/A") ?></p>
    <p><strong>Email :</strong> <?= htmlspecialchars($etudiant["email"] ?? "N/A") ?></p>
    <p><strong>Date de naissance :</strong> <?= htmlspecialchars($etudiant["dt_naissance"] ?? "N/A") ?></p>
    <p><strong>Admin :</strong> <?= isset($etudiant["isAdmin"]) ? ($etudiant["isAdmin"] ? "Oui" : "Non") : "N/A" ?></p>
    <p><strong>Dernière mise à jour :</strong> <?= htmlspecialchars($etudiant["dt_maj"] ?? "N/A") ?></p>
<?php else: ?>
    <p style="color: red;">L'étudiant n'existe pas dans la base de données.</p>
<?php endif; ?>

        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Date de naissance</th>
                    <th>Admin</th>
                    <th>Dernière mise à jour</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($etudiants as $etudiant): ?>
                    <tr>
                        <td><?= ($etudiant["id_etudiant"] ?? "N/A") ?></td>
                        <td><?= ($etudiant["nom"] ?? "N/A") ?></td>
                        <td><?= ($etudiant["prenom"] ?? "N/A") ?></td>
                        <td><?= ($etudiant["email"] ?? "N/A") ?></td>
                        <td><?= ($etudiant["dt_naissance"] ?? "N/A") ?></td>
                        <td><?= isset($etudiant["isAdmin"]) ? ($etudiant["isAdmin"] ? "Oui" : "Non") : "N/A" ?></td>
                        <td><?= ($etudiant["dt_maj"] ?? "N/A") ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</body>
</html>
