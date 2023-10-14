<?php
include "../../connect.php";
$hd_id = filterRequest("hd_id");
$hd_name = filterRequest("hd_name");
$hd_desc = filterRequest("hd_desc");
$hd_image = imageUpload("../../upload/home_detials", "file");
$imageold = filterRequest("imageold");
$hd_cv = filterRequest("hd_cv");
$hd_aboutmename = filterRequest("hd_aboutmename");
$hd_aboutmedesc = filterRequest("hd_aboutmedesc");

if ($hd_image == "empty") {
    $data = array(
        "hd_name" => $hd_name,
        "hd_desc" => $hd_desc,
        "hd_cv" => $hd_cv,
        "hd_aboutmename" => $hd_aboutmename,
        "hd_aboutmedesc" => $hd_aboutmedesc,
    );
} else {
    deleteFile("../../upload/home_detials", $imageold);
    $data = array(
        "hd_name" => $hd_name,
        "hd_desc" => $hd_desc,
        "hd_image" => $hd_image,
        "hd_cv" => $hd_cv,
        "hd_aboutmename" => $hd_aboutmename,
        "hd_aboutmedesc" => $hd_aboutmedesc,
    );
}
try {
    updateData("home_detials", $data, "hd_id = $hd_id");
} catch (Exception $e) {
     echo 'Caught exception: ', $e->getMessage(), "\n";}
