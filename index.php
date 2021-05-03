<?php
include_once "api.php";
include_once "app.php";
// Steg 1 - Ange lämpliga headers

header("Content-Type: application/json; charset=UTF-8");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Referrer-Policy: no-referrer");
$array = [];
if(isset($_GET)){



$errors = [];
$category = category($products);
$show = show();
$test = find($category, $products);
if($category === false){
    $cat_error = ["Category" => "Category not found"];
    array_push($errors, $cat_error);
}

if($show === false){
    $show_error = ["Show" => "Show must be between 1 and 20"];
    array_push($errors, $show_error);
}
if(!empty($errors)){
    $array = $errors;

}
else{
    if($show != null) {
    for($i = 0; $i< $show; $i++){
        if($test[$i] != null){
            array_push($array, $test[$i]);
        }
        
    }
    
}
else{
    $array = $test;
}

if($category === null){
    
    for($i = 0; $i< $show; $i++){
        array_push($array,$products[$i]);
        }
        
    }

}

echo json_encode($array);
}

else{
    foreach($products as $item => $key){
        array_push($array, $key);
    }
    echo json_encode($array);
  
}