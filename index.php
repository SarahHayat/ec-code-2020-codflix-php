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
    echo "action : " . $_GET['action'];
    switch ($_GET['action']):


        case 'login':
            echo "action : " . $_GET['action'];
            if (!empty($_POST)) login($_POST);
            else loginPage();

            break;

        case 'signup':
            echo "action : " . $_GET['action'];
            signupPage();

            break;

        case 'logout':
            echo "action : " . $_GET['action'];
            logout();

            break;
        case 'history':
            echo "action : " . $_GET['action'];
            history();

            break;

        case 'media':
            echo "action : " . $_GET['action'];
            mediaPage();


            break;

        case 'film':
            echo "action : " . $_GET['action'];
            filmPage();


            break;

        case 'serie':
            echo "action : " . $_GET['action'];
            seriePage();


            break;

        case 'detailSerie':
            echo "action : " . $_GET['action'];
            detailSeriePage();


            break;

        case 'saison':
            echo "action : " . $_GET['action'];

           saisonPage();


            break;

        case 'deleteDistinct':

            echo "action : " . $_GET['action'];
            deleteDistinct();


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
