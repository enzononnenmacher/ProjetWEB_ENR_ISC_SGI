<?php
function annonce($data){

    require "model/annonceManager.php";
    annonceToJson($data);
    require "view/home.php";

}


// Calls gallery page
function all(){

    require "model/annonceManager.php";
    $temp = jsonToAnnonce();
    $articles = array_reverse($temp);
    require "view/all.php";
}

function myAd($email){

    require "model/annonceManager.php";
    $temp = jsonToMyAnnonce($email);
    $articles = array_reverse($temp);
    require "view/myAd.php";

}

function adDetails($ID){

    require "model/annonceManager.php";
    $article = detailForAd($ID);
    require "view/adDetails.php";

}

function modifyForm($data , $code){

    require "model/annonceManager.php";
    modifAnn($data, $code);
    $articles = jsonToMyAnnonce($_SESSION['userEmailAddress']);
    require "view/myAd.php";

}


function modifyAnnonce($ID){

        require "model/annonceManager.php";
        $article = detailForAd($ID);
        require "view/modifyAd.php";

}

function deleteArt($ID){

    require "model/annonceManager.php";
    deleteAnn($ID);
    $articles = jsonToMyAnnonce($_SESSION['userEmailAddress']);
    require "view/myAd.php";

}