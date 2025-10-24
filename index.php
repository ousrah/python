<?php
// 1. Inclure la configuration (pour rendre la variable $parcours disponible)
require_once 'config.php';

// 2. Inclure l'en-tête de la page
require_once './layout/header.php';

// 3. Inclure les différentes parties du contenu
require_once './partials/partie_1.php';
require_once './partials/partie_2.php';
require_once './partials/partie_3.php';
require_once './partials/partie_4.php';
require_once './partials/partie_5.php';
require_once './partials/partie_6.php';
require_once './partials/felicitations.php';

// require_once 'partials/partie2.php'; // On ajoutera cette ligne quand la partie 2 sera prête
// etc.

// 4. Inclure le pied de page
require_once './layout/footer.php';
?>