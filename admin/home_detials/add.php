<?php

include "../../connect.php";
$hd_name = filterRequest("hd_name");
$hd_desc = filterRequest("hd_desc");
$hd_image = imageUpload("../../upload/projects_list", "file");
$hd_cv = filterRequest("hd_cv");
$hd_aboutmename = filterRequest("hd_aboutmename");
$hd_aboutmedesc = filterRequest("hd_aboutmedesc");
  $data = array(
    "hd_name" => $hd_name,
    "hd_desc" => $hd_desc,
    "hd_image" => $hd_image,
    "hd_cv" => $hd_cv,
    "hd_aboutmename" => $hd_aboutmename,
    "hd_aboutmedesc" => $hd_aboutmedesc,
  );


if ($hd_image != "empty" && $hd_image != "fail") {
    insertData("home_detials", $data);}

 

 