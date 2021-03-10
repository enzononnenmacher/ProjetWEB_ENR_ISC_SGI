<?php
function annonce($data){
    require "model/annonceManager.php";
    annonceToJson($data);
    require "view/home.php";
}


// Calls gallery page
function all()
{
    require "model/annonceManager.php";
    $articles = jsonToAnnonce();
    require "view/all.php";
}