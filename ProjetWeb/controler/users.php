<?php

/**
 * @File : users.php
 * @Brief : This controller is designed to manage all users actions
 * @Author : Created by Pascal.BENZONANA
 * @Author : Updated by Nicolas.GLASSEY
 * @Version : 13-04-2020
 */


// Create the session with the email address
function createSession($userEmailAddress)
{
    $_SESSION['userEmailAddress'] = $userEmailAddress;
}


// Check if the login informations are correct
function login($loginRequest)
{
    //if login request was submitted
    try {
        if (isset($loginRequest['inputUserEmailAddress']) && isset($loginRequest['inputUserPsw'])) {
            //extract login parameters
            $userEmailAddress = $loginRequest['inputUserEmailAddress'];
            $userPsw = $loginRequest['inputUserPsw'];

            //try to check if username and password are matching with the database
            require_once "model/usersManager.php";
            if (isLoginCorrect($userEmailAddress, $userPsw)) {
                $loginErrorMessage = null;
                $_SESSION['userEmailAddress'] = $userEmailAddress;
                require "view/home.php";
            } else { // if the username and password do not match, login form appears again with an error message
                $loginErrorMessage = "L'adresse email et/ou le mot de passe ne correspondent pas !";
                require "view/login.php";
            }
        } else { // the user does not yet fill the form
            require "view/login.php";
        }
    } catch (ModelDataBaseException $ex) {
        $loginErrorMessage = "Nous rencontrons actuellement un problème technique. Il est temporairement impossible de s'annoncer. Désolé du dérangement !";
        $_SESSION['userEmailAddress'] = null;
        require "view/login.php";
    }
}


// Destroys session to log out
function logout()
{
    $_SESSION = array();
    session_destroy();
    require "view/home.php";
}


// Function to register
function register($registerRequest)
{
    try {
        // variable set
        if (isset($registerRequest['inputUserEmailAddress']) && isset($registerRequest['inputUserPsw']) && isset($registerRequest['inputUserPswRepeat'])) {

            // extract register parameters
            $userEmailAddress = $registerRequest['inputUserEmailAddress'];
            $userPsw = $registerRequest['inputUserPsw'];
            $userPswRepeat = $registerRequest['inputUserPswRepeat'];

            if ($userPsw == $userPswRepeat) {
                require_once "model/usersManager.php";
                if (registerNewAccount($userEmailAddress, $userPsw)) {
                    $_SESSION['userEmailAddress'] = $userEmailAddress;
                    $registerErrorMessage = null;
                    require "view/home.php";
                } else {
                    $registerErrorMessage = "L'inscription n'est pas possible avec les valeurs saisies !";
                    require "view/register.php";
                }
            } else {
                $registerErrorMessage = "Les mots de passe ne sont pas similaires !";
                require "view/register.php";
            }
        } else {
            $registerErrorMessage = null;
            require "view/register.php";
        }
    } catch (ModelDataBaseException $ex) {
        $registerErrorMessage = "Nous rencontrons actuellement un problème technique. Il est temporairement impossible de s'enregistrer. Désolé du dérangement !";
        require "view/register.php";
    }
}

