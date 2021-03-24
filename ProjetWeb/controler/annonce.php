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

function modifyC($dataM)
{
    if(isset($dataM)){
    require "model/annonceManager.php";
    modify($dataM);
    require "view/myAd.php";
    }
    else{
        require "view/modifyAd.php";
    }
}