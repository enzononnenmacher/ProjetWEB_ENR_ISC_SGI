<?php
function annonce($data){
    require "model/annonceManager.php";
    annonceToJson($data);
    require "view/home.php";
}

function myAd(){
    require "viev/myAd.php";
}