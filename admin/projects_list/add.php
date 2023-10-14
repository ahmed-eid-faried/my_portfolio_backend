<?php

include "../../connect.php";
$pl_title = filterRequest("pl_title");
$pl_body = filterRequest("pl_body");
$pl_image = imageUpload("../../upload/projects_list", "file");
$pl_googleplay = filterRequest("pl_googleplay");
$pl_appstore = filterRequest("pl_appstore");
$pl_github = filterRequest("pl_github");
$pl_doc = filterRequest("pl_doc");
$pl_web = filterRequest("pl_web");

 $data = array(
    "pl_title" => $pl_title,
    "pl_body" => $pl_body,
    "pl_image" => $pl_image,
    "pl_googleplay" => $pl_googleplay,
    "pl_appstore" => $pl_appstore,
    "pl_github" => $pl_github,
    "pl_doc" => $pl_doc,
    "pl_web" => $pl_web,
 );


if ($pl_image != "empty" && $pl_image != "fail") {
    insertData("projects_list", $data);}

 



// $categoriesid = filterRequest("categoriesid");
// $date=date('y-m-d  H:i:s');
// $image = imageUpload("../../upload/projects_list", "file");

