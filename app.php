<?php




function category($products){
    $categories = [];
    foreach($products as $item => $key){
    array_push($categories, $key["category"]);
}
    if(isset($_GET["category"])){
        $category = ($_GET["category"]);
    if(in_array($category, $categories)){
        return $category;
    }
    else{
        return false;
    }
}
else{
    return null;
}
}

function show(){
    if(isset($_GET["show"])){
        
        $get = $_GET["show"];
        $show = (int)$get;
        if($show <=20){
            return $show;
        }
        else{
            return false;
        }
            
        
    }

    else{
        return null;
    }
    
}

function find($category,$products){
    $test = [];
    foreach($products as $item => $key){
        if($key["category"] === $category){
            array_push($test, $key);
        }
    }

    return $test;
}