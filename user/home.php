<?php

include "../connect.php";
$alldata = array();
$alldata['status'] = "success";    

$social_media = getAllData("social_media", null, null, false);
$alldata['social_media'] = $social_media;

 $projects_list = getAllData("projects_list", null, null, false); 
$alldata['projects_list'] = $projects_list;

$home_detials = getAllData("home_detials", null, null, false); 
$alldata['home_detials'] = $home_detials;

$services = getAllData("services", null, null, false); 
$alldata['services'] = $services;

// $items2 = getAllData("finalallitems", " items_discount != 0   ORDER BY `items_discount` DESC;", null, false);
// $alldata['items_discount'] = $items2;

// $items3 = getAllData("itemstopselling", " 1=1 ", null, false); 
// $alldata['itemstopselling'] = $items3;

// $items4 = getAllData("itemstoprating", " 1=1 ", null, false); 
// $alldata['itemstoprating'] = $items4;


echo json_encode($alldata);

