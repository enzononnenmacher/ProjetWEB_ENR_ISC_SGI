<?php

require "controler/users.php";
require "controler/navigation.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;
        case 'login' :
            login($_POST);
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
        default :
            lost();
    }
} else {
    home();
}