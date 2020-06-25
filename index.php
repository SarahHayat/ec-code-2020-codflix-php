<?php

require_once('controller/homeController.php');
require_once('controller/loginController.php');
require_once('controller/signupController.php');
require_once('controller/MediaController.php');
require_once('controller/historyController.php');

/**************************
 * ----- HANDLE ACTION -----
 ***************************/

if (isset($_GET['action'])):

    switch ($_GET['action']):


        case 'login':

            if (!empty($_POST)) login($_POST);
            else loginPage();

            break;

        case 'signup':

            signupPage();

            break;

        case 'logout':

            logout();

            break;
        case 'history':

            history();

            break;

        case 'media':

            mediaPage();


            break;

        case 'film':

            filmPage();


            break;

        case 'serie':

            seriePage();


            break;

        case 'detailSerie':

            detailSeriePage();


            break;

        case 'saison':
            echo "action : " . $_GET['action'];


            saisonPage();


            break;



    endswitch;

else:

    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;

    if ($user_id):
        mediaPage();
    else:
        homePage();
    endif;

endif;
