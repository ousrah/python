<?php
// Fichier de configuration du cours
// C'est ici que l'on définit le sommaire.

$parcours = [
    "Partie 1" => [
        "titre" => "L'Environnement et les Bases",
        "chapitres" => [
            ["titre" => "Introduction à Python", "ancre" => "#introduction"],
            ["titre" => "Prise en main de Jupyter", "ancre" => "#jupyter"],
            ["titre" => "Variables, Types et Opérateurs", "ancre" => "#variables-types"],
            ["titre" => "Affichage et Lecture de Données", "ancre" => "#entrees-sorties"],
        ]
    ],
    "Partie 2" => [
        "titre" => "Logique et Contrôle",
        "chapitres" => [
            ["titre" => "Les Conditions (if, elif, else)", "ancre" => "#conditions"],
            ["titre" => "Le Filtrage par Motif (match...case)", "ancre" => "#match-case"],
            ["titre" => "Les Boucles (for, while)", "ancre" => "#boucles"],
        ]
    ],
   "Partie 3" => [
        "titre" => "Fonctions, Documentation et Structures de Données", // Titre mis à jour
        "chapitres" => [
            ["titre" => "Les Fonctions", "ancre" => "#fonctions"],
            ["titre" => "La Documentation (Docstrings)", "ancre" => "#documentation"], // NOUVEAU
            ["titre" => "Les Listes", "ancre" => "#listes"],
            ["titre" => "Les Tuples", "ancre" => "#tuples"],
            ["titre" => "Les Dictionnaires", "ancre" => "#dictionnaires"],
            ["titre" => "Les Ensembles (Sets)", "ancre" => "#sets"],
        ]
    ],
    "Partie 4" => [
        "titre" => "Programmation Robuste et Fichiers", // Titre mis à jour
        "chapitres" => [
            ["titre" => "La Gestion des Exceptions", "ancre" => "#exceptions"], // NOUVEAU
            ["titre" => "Manipulation de Fichiers Texte", "ancre" => "#fichiers"],
            ["titre" => "Travailler avec les Fichiers CSV", "ancre" => "#fichiers-csv"],
            ["titre" => "Travailler avec les Fichiers JSON", "ancre" => "#fichiers-json"],
        ]
    ]
];


?>