<?php
require 'utils/utils.php';

switch ($_SERVER['REDIRECT_URL']) {
    case '/':
        require 'controllers/indexCtrl.php';
        break;
        
    case '/connexion':
        require 'controllers/connexionCtrl.php';
        break;
    case '/inscription':
        require 'controllers/inscriptionCtrl.php';
        break;
    case '/profile':
        require 'controllers/profileCtrl.php';
        break;
    default:
        // code par défaut ou erreur 404
        break;
}

?>