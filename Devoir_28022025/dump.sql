CREATE DATABASE IF NOT EXISTS module6;

USE module6;

CREATE TABLE IF NOT EXISTS etudiant (
    id_etudiant INTEGER PRIMARY KEY AUTOINCREMENT,
    prenom TEXT,
    nom TEXT,
    email TEXT,
    cv TEXT,
    dt_naissance TEXT, 
    isAdmin INTEGER,
    dt_maj TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO etudiant (prenom, nom, email, cv, dt_naissance, isAdmin, dt_maj) VALUES
('Jean', 'Dupont', 'jeandupont@gmail.com', 'lorem ipsum', '1990-01-01', 1, CURRENT_TIMESTAMP),
('Marie', 'Durand', 'mariedurand@gmail.com', 'lorem ipsum', '1991-01-01', 0, CURRENT_TIMESTAMP),
('Pierre', 'Dutronc', 'pierredutronc@gmail.com', 'lorem ipsum', '1992-01-01', 0, CURRENT_TIMESTAMP),
('Paul', 'Dupuis', 'pauldupuis@yahoo.fr', 'lorem ipsum', '1993-01-01', 0, CURRENT_TIMESTAMP),
('Jacques', 'Durand', 'jacquesdurand@outlook.fr', 'lorem ipsum', '1994-01-01', 0, CURRENT_TIMESTAMP),
('Jeanne', 'Dupont', 'jeanedupont@microsoft.fr', 'lorem ipsum', '1995-01-01', 0, CURRENT_TIMESTAMP),
('Mark', 'Dutemps', 'markdutemps@gmail.com', 'lorem ipsum', '1996-01-01', 0, CURRENT_TIMESTAMP),
('Clara', 'Duvent', 'claraduvent@hotmail.fr', 'lorem ipsum', '1997-01-01', 0, CURRENT_TIMESTAMP),
('Patrick', 'Mirabel', 'patrickmirabel@hotmail.fr', 'lorem ipsum', '1998-01-01', 0, CURRENT_TIMESTAMP),
('Simon', 'Delautel', 'simondelautel@gmail.fr', 'lorem ipsum', '1999-01-01', 0, CURRENT_TIMESTAMP),
('Sylvie', 'Dumatin', 'sylviedumatin@hotmail.fr', 'lorem ipsum', '2000-01-01', 0, CURRENT_TIMESTAMP);
