<?php

include "../../connect.php";
$services_title = filterRequest("services_title");
$services_body = filterRequest("services_body");
$services_assets = imageUpload("../../upload/services", "file");
$services_type = filterRequest("services_type");
   $data = array(
    "services_title" => $services_title,
    "services_body" => $services_body,
    "services_assets" => $services_assets,
    "services_type" => $services_type,
   );


if ($services_assets != "empty" && $services_assets != "fail") {
    insertData("services", $data);}

 

    