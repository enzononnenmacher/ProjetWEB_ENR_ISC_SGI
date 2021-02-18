<?php

/**
 * @File : index.php
 * @Brief : Calls functions from controllers to display the right pages
 * @Author : Created by Shanshe GUNDISHVILI
 * @Author : Updated by Kevin VAUCHER
 * @Version : 17-02-2021
 */


// Calls controllers to call the right pages
require "controler/users.php";
require "controler/navigation.php";

// Creates session
session_start();

// Reads what page the user is on then calls the function the call the right page to display it
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;
        case 'login' :
            login($_POST);
            break;
        case 'logout' :
            logout();
            break;
        case 'register' :
            register($_POST);
            break;
        case 'about' :
            about();
            break;
        case 'all' :
            all();
            break;
        case 'createAd' :
            createAd();
            break;
        default :
            lost();
    }
} else {
    home();
}