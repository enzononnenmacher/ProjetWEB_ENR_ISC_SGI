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

function myAd($email)
{
    require "model/annonceManager.php";
    $articles = jsonToMyAnnonce($email);
    require "view/myAd.php";
}

function adDetails(){
    require "model/annonceManager.php";
    $detail = detailForAd();
    require "view/adDetails.php";
}


function modifyC($dataM, $ID)
{
    if(isset($dataM)){
        require "model/annonceManager.php";
        modify($dataM, $ID);
        require "view/myAd.php";
    }
    else{
        require "view/modifyAd.php";
    }
}