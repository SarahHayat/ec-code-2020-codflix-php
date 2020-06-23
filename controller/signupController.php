<?php

require_once('model/user.php');

/****************************
 * ----- LOAD SIGNUP PAGE -----
 ****************************/

function signupPage()
{

    $user = new stdClass();
    $user->id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;

    if (!$user->id) {
        require('view/auth/signupView.php');
        if (isset($_POST['email'], $_POST['password'], $_POST['password_confirm'])) {
            $email = $_POST['email'];
            $password = hash('sha256', ($_POST['password']));
            $password_confirm = hash('sha256',($_POST['password_confirm']));
            $new_user = new User();
            $new_user->setEmail($email);
            $new_user->setPassword($password, $password_confirm);
            $new_user->createUser();

        }
    } else {
        require('view/homeView.php');
    }


}

/***************************
 * ----- SIGNUP FUNCTION -----
 ***************************/
