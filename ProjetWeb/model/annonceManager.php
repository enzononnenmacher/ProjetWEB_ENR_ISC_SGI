<?php

function imageSave($ID){

    $fileName = $_FILES['inputPictures']['name'];
    $fileTmpName = $_FILES['inputPictures']['tmp_name'];
    $fileSize = $_FILES['inputPictures']['size'];
    $fileError = $_FILES['inputPictures']['error'];

    $tmpFileExt = explode('.', $fileName);
    $fileExt = strtolower(end($tmpFileExt));

    $allowed = array('jpeg', 'jpg', 'png');


    $fName =     $fName = $_SESSION['userEmailAddress']."-".$ID;;

    if (in_array($fileExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = $fName . "." . $fileExt;
                $fileDestination = "data/images/" . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
            } else {

                echo "le fichier est trop grand!";
            }
        } else {
            echo "il y a eu une erreur lors du chargement!";
        }
    } else {
        echo "vous ne pouvez pas uploader des fichiers de ce type!";
    }




    return $fileDestination;




}




/*
 * to insert information and images
 *
 * */
function annonceToJson($data)
{

    $arr['eee'] = "aweqw";
    $arr = json_decode(file_get_contents("data/annonce.json"), true);

    $count = 0;
    if ($arr) {
        foreach ($arr as $rand) {
            $count++;
        }
    }

    $new['Email'] = $_SESSION['userEmailAddress'];
    $new['active'] = true;
    $new['ID'] = $count;



    $data['Email'] = $new['Email'];
    $data['active'] = $new['active'];
    $data['ID'] = $new['ID'];
    $filePlacement = imageSave($data['ID']);
    $data['inputPictures'] = $filePlacement;

    array_push($arr, $data);
    file_put_contents("data/annonce.json", json_encode($arr));
}


/*
 *
 *
 *
 * */
function deleteAnn($IDToDEL)
{
    $arrayDef['eee'] = "aweqw";
    $arrayDef = json_decode(file_get_contents("data/annonce.json"), true);
    $count = -1;
    foreach ($arrayDef as $article) {
        $count++;
        if ($article['ID'] == $IDToDEL) {

            if($article['active'] == true){
            $article['active'] = false;}

            if($article['active'] == false){
                $article['active'] = true;}

            $toPut = $article;
        }
    }

    $arrayDef[$count-1] = $toPut;

    file_put_contents("data/annonce.json", json_encode($arrayDef));
}


function modifAnn($toInsert, $IDToDEL)
{
    $arrayDef['eee'] = "aweqw";
    $arrayDef = json_decode(file_get_contents("data/annonce.json"), true);
    $count = 0;
    foreach ($arrayDef as $article) {


        if ($article['ID'] == $IDToDEL) {



            $article['inputName'] = $toInsert['inputName'];
            $article['inputAddress'] = $toInsert['inputAddress'];
            $article['inputNPA'] = $toInsert['inputNPA'];
            $article['inputCity'] = $toInsert['inputCity'];
            $article['inputNameAnnonce'] = $toInsert['inputNameAnnonce'];
            $article['inputDescription'] = $toInsert['inputDescription'];
            $article['inputAvailableDate'] = $toInsert['inputAvailableDate'];
            $article['inputPrice'] = $toInsert['inputPrice'];



            if (isset($_FILES)) {
                $filePlacement = imageSave($IDToDEL);
                $article['inputPictures'] = $filePlacement;
            }
            $finalRes = $article;
            $placeInArr = $count;
            $arrayDef[$placeInArr] = $finalRes;
            file_put_contents("data/annonce.json", json_encode($arrayDef));

        }
        $count++;
    }
}

function jsonToAnnonce()
{
    $arrayDef['eee'] = "aweqw";
    $arrayDef = json_decode(file_get_contents("data/annonce.json"), true);


    return $arrayDef;
}

function jsonToMyAnnonce($email)
{

    $arr['eee'] = "aweqw";
    $arr = json_decode(file_get_contents("data/annonce.json"), true);
    $count = 0;

    foreach ($arr as $ann) {
        if ($ann['Email'] == $email) {

            $resArr[$count] = $ann;
            $count++;
        }
    }


    return $resArr;
}


function detailForAd($ID)
{
    $details['dfghj'] = "ghjkl";
    $details = json_decode(file_get_contents("data/annonce.json"), true);

    foreach ($details as $detail) {
        if ($detail['ID'] == $ID) {

            return $detail;

        }
    }
    $error = "error";
    return $error;
}

