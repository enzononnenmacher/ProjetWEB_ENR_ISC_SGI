<?php

function annonceToJson($data)
{
   $arr = json_decode(file_get_contents("data/annonce.json"),true);

    $count = 0;
    foreach ($arr as $rand){
        $count++;
    }




    $new['Email']= $_SESSION['userEmailAddress'];
    $new['active'] = true;
    $new['ID']= $count;


    $data['Email'] =$new['Email'];
    $data['active'] =$new['active'];
    $data['active'] =$new['ID'];
    array_push($arr, $data);


    file_put_contents("data/annonce.json", json_encode($arr));
}


function deleteAnn($IDToDEL){

    $arrayDef[] =json_decode(file_get_contents("data/annonce.json"),true);
    $count = 0;
    foreach ($arrayDef as $article){
        $count++;

        if($article['ID']==$IDToDEL){
            $article['active']=false;
            $toPut = $article;
        }
    }

    $arrayDef[$count] = $toPut;

    file_put_contents("data/annonce.json", json_encode($arrayDef));
}



function modifAnn($toInsert, $IDToDEL){

    $arrayDef[] =json_decode(file_get_contents("data/annonce.json"),true);
    $count = 0;
    foreach ($arrayDef as $article){
        $count++;

        if($article['ID']==$IDToDEL){
            $article=$toInsert;
            $toPut = $article;
        }
    }

    $arrayDef[$count] = $toPut;

    file_put_contents("data/annonce.json", json_encode($arrayDef));
}

function jsonToAnnonce(){

    $arrayDef[] =json_decode(file_get_contents("data/annonce.json"),true);


    return $arrayDef;
}