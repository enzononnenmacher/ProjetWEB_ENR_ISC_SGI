<?php

function annonceToJson($data)
{
    $arr[] =json_decode(file_get_contents("data/annonce.json"),true);
    $last = end($arr);
    $lastID = $last['ID'] +1;


    $data['Email']= $_SESSION['userEmailAddress'];
    $data['active'] = true;
    $data['ID']= $lastID;
    $arr[$lastID]=$data;


    file_put_contents("data/annonce.json", json_encode($arr));
}