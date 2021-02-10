<?php

require "controller/controller.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;
        case 'login' :
            login();
            break;
        case 'register' :
            register();
            break;
        default :
            lost();
    }
} else {
    home();
}