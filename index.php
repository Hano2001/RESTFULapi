<?php
include_once "api.php";
// Steg 1 - Ange lämpliga headers
header("Content-Type: application/json; charset=UTF-8");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Referrer-Policy: no-referrer");

// Steg 2 - Skapa arrayer
foreach($products as $product =>$key){
    if($key["category"] === "jewelery"){
        print_r($key);
    }
};
