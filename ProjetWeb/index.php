<?php

/**
 * @File : index.php
 * @Brief : Calls functions from controllers to display the right pages
 * @Author : Created by Shanshe GUNDISHVILI
 * @Author : Updated by Kevin VAUCHER
 * @Version : 17-02-2021
 */ 

require "controler/annonce.php";
require "controler/users.php";
require "controler/navigation.php";

session_start();

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
        case 'annonce' :
            annonce($_POST);
            break;
        case 'contact' :
            contact();
            break;
        case 'myAd' :
            myAd($_SESSION['userEmailAddress']);
            break;
        case 'adDetails' :
            adDetails();
            break;
        default :
            lost();
    }
} else {
    home();
}