<?php
include "../../connect.php";
 
$services_id = filterRequest("services_id"); 
$services_title = filterRequest("services_title");
$services_body = filterRequest("services_body");
$services_assets = imageUpload("../../upload/services", "file");
$imageold = filterRequest("imageold");
$services_type = filterRequest("services_type");

if ($services_assets == "empty") {
    $data = array(
        "services_title" => $services_title,
        "services_body" => $services_body,
         "services_type" => $services_type,
    );
} else {
    deleteFile("../../upload/services", $imageold);
    $data = array(
        "services_title" => $services_title,
        "services_body" => $services_body,
        "services_assets" => $services_assets,
        "services_type" => $services_type,
    );
}
try {
    updateData("services", $data, "services_id = $services_id");
} catch (Exception $e) {
     echo 'Caught exception: ', $e->getMessage(), "\n";}
