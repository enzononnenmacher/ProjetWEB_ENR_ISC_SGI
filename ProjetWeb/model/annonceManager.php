<?php

function annonceToJson($data)
{
    file_put_contents("data/annonce.json", json_encode($data));
}
